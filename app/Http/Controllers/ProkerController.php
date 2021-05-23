<?php

namespace App\Http\Controllers;

use App\Proker;
use Illuminate\Http\Request;

class ProkerController extends Controller
{
    public function index(){

        $proker = Proker::All();

        return view('Proker.index',compact('proker'));
    }
    public function create(){
        return view('Proker.tambah');
    }

    public function store(Request $request){
        $this->validate($request, [

			'nama_kegiatan' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
			'tempat' => 'required',
			'deskripsi_kegiatan' => 'required',
		]);
        Proker::create([

			'nama_kegiatan' => $request->nama_kegiatan,
			'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
			'tempat' => $request->tempat,
			'deskripsi_kegiatan' => $request->deskripsi_kegiatan,

        ]);
        // alert()->success('Data Pupuk telah ditambahkan', 'Sukses');
        return redirect('/proker');
    }
    public function edit($id){
        $proker = Proker::where('id', $id)->first();
        // $kategori = Kategori::All();

        return view('Proker.edit', compact('proker'));
    }
    public function update($id, Request $request){
        $this->validate($request,[
            'nama_kegiatan' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
			'tempat' => 'required',
			'deskripsi_kegiatan' => 'required',
        ]);

        $proker = Proker::find($id);
        $proker->nama_kegiatan= $request->nama_kegiatan;
        $proker->tanggal = $request->tanggal;
        $proker->waktu = $request->waktu;
        $proker->tempat = $request->tempat;
        $proker->deskripsi_kegiatan = $request->deskripsi_kegiatan;
        $proker->save();
        // alert()->success('Data Pupuk telah diupdate', 'Sukses Di Update');

        return redirect('/proker');
    }
    public function delete($id){
        $proker = Proker::find($id);
            $proker->delete();
            alert()->error('Data Proker telah dihapus', 'Delete');
            return redirect('/proker');
    }
}
