<?php

namespace App\Http\Controllers;

use App\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{

    public function index(){



        $anggota = Anggota::All();

        return view('Anggota.index',compact('anggota'));
    }

    public function create()
    {
        $anggota = Anggota::orderBy('nama_kategori', 'DESC')->get();
        return view('Anggota.tambah',compact('kategori'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [

			'nama' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'kelas' => 'required',
            'jurusan' => 'required',
			'alamat' => 'required',
			'divisi' => 'required',
			'hohp' => 'required',
			'hobi' => 'required',
			'status' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$foto = $request->file('foto');

		$nama_file = time()."_".$foto->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'foto_anggota';
		$foto->move($tujuan_upload,$nama_file);

		Anggota::create([

			'nama' => $request->nama,
            'foto' => $nama_file,
			'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
			'alamat' => $request->alamat,
			'divisi' => $request->komposisi,
			'nohp' => $request->nohp,
			'hobi' => $request->hobi,
            'status' => $request->harga,

        ]);
        // alert()->success('Data Pupuk telah ditambahkan', 'Sukses');
        return redirect('/mitra/produk');

    }

    public function edit($id){

        $anggota = Anggota::where('id', $id)->first();
        // $kategori = Kategori::All();

        return view('Anggota.edit', compact('anggota'));
    }

    public function update($id, Request $request){
        $this->validate($request,[
            'nama' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'kelas' => 'required',
            'jurusan' => 'required',
			'alamat' => 'required',
			'divisi' => 'required',
			'hohp' => 'required',
			'hobi' => 'required',
			'status' => 'required',
        ]);

        $anggota = Anggota::find($id);
        $anggota->nama= $request->nama;
        if($request->file('foto') == "")
        {
                $anggota->gambar=$anggota->gambar;

            }
            else
            {

            $filename = time(). '.png'; '.jpg'; '.jpeg';
            $request->file('foto')->move("../public/foto_anggota", $filename);
            $anggota->foto= $filename;
        }
        $anggota->kelas = $request->kelas;
        $anggota->jurusan = $request->jurusan;

        $anggota->alamat = $request->alamat;
        $anggota->divisi = $request->divisi;
        $anggota->nohp = $request->nohp;
        $anggota->hobi = $request->hobi;
        $anggota->status = $request->status;
        $anggota->save();
        // alert()->success('Data Pupuk telah diupdate', 'Sukses Di Update');

        return redirect('/anggota');
    }

    public function delete($id)
    {
            $anggota = Anggota::find($id);
            $anggota->delete();
            // alert()->error('Data Pupuk telah dihapus', 'Delete');
            return redirect('/anggota');
    }

}
