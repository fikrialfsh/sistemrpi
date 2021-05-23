<?php

namespace App\Http\Controllers;


use App\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = Peminjaman::All();

        return view('peminjaman.index',compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peminjaman.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

			'kode_peminjaman' => 'required',
            'nama_barang' => 'required',
            'nama_peminjam' => 'required',
			'tgl_pinjam' => 'required',
			'tgl_kembali' => 'required',
            'catatan' => 'required',
		]);
        Peminjaman::create([

			'kode_peminjaman' => $request->kode_peminjaman,
			'nama_barang' => $request->nama_barang,
            'nama_peminjam' => $request->nama_peminjam,
			'tgl_pinjam' => $request->tgl_pinjam,
			'tgl_kembali' => $request->tgl_kembali,
            'catatan' => $request->catatan,

        ]);
        // alert()->success('Data Pupuk telah ditambahkan', 'Sukses');
        return redirect('/peminjaman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjaman = Peminjaman::where('id', $id)->first();
        // $kategori = Kategori::All();

        return view('peminjaman.edit', compact('peminjaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

			'kode_peminjaman' => 'required',
            'nama_barang' => 'required',
            'nama_peminjam' => 'required',
			'tgl_pinjam' => 'required',
			'tgl_kembali' => 'required',
            'catatan' => 'required',
		]);

        $peminjaman = Peminjaman::find($id);
        $peminjaman->kode_peminjaman= $request->kode_peminjaman;
        $peminjaman->nama_barang = $request->nama_barang;
        $peminjaman->nama_peminjam = $request->nama_peminjam;
        $peminjaman->tgl_pinjam = $request->tgl_pinjam;
        $peminjaman->tgl_kembali = $request->tgl_kembali;
        $peminjaman->catatan = $request->catatan;
        $peminjaman->save();
	
        // alert()->success('Data Pupuk telah ditambahkan', 'Sukses');
        return redirect('/peminjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjaman = Peminjaman::find($id);
        $peminjaman->delete();
        alert()->error('Data peminjaman telah dihapus', 'Delete');
        return redirect('/peminjaman');
    }
}
