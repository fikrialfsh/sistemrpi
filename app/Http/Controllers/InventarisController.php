<?php

namespace App\Http\Controllers;

use App\Inventaris;
use App\Kategori;
use Illuminate\Http\Request;



class InventarisController extends Controller
{
    public function index(){

        $inventaris = Inventaris::All();

        return view('Inventaris.index',compact('inventaris'));
    }
    public function create()
    {
        $inventaris = Inventaris::All();
        $kategori = Kategori::All();
        return view('inventaris.tambah', compact('inventaris','kategori'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
    		'nama_barang' => 'required',
    		'kategori_id' => 'required',
    		'tanggal_pengadaan' => 'required',
    		'kondisi' => 'required',
    		'stok' => 'required',


    	]);
        Inventaris::create([
    		'nama_barang' => $request->nama_barang,
    		'kategori_id' => $request->kategori_id,
    		'tanggal_pengadaan' =>$request->tanggal_pengadaan,
    		'kondisi' => $request->kondisi,
    		'stok' => $request->stok


    	]);
        // alert()->success('Data Mitra telah ditambahkan', 'Sukses');

        return redirect('/inventaris');

    }

    public function edit($id){
        $inventaris = Inventaris::find($id);
        $kategori = Kategori::All();
        return view('Inventaris.edit', compact('inventaris','kategori'));
    }

    public function update(Request $request, Inventaris $inventaris , $id)
    {
        $this->validate($request,[
            'nama_barang' => 'required',
    		'kategori_id' => 'required',
    		'tanggal_pengadaan' => 'required',
    		'kondisi' => 'required',
    		'stok' => 'required',

         ]);

         $inventaris = Inventaris::find($id);
         $inventaris->nama_barang = $request->nama_barang;
         $inventaris->kategori_id = $request->kategori_id;
         $inventaris-> tanggal_pengadaan = $request->tanggal_pengadaan;
         $inventaris->kondisi = $request->kondisi;
         $inventaris->stok = $request->stok;


         $inventaris->save();
        // alert()->success('Data Mitra telah diedit', 'Sukses');

         return redirect('/inventaris');
    }
    public function delete($id)
    {
           $inventaris = Inventaris::find($id);
           $inventaris->delete();
            // alert()->error('Data Pupuk telah dihapus', 'Delete');
            return redirect('/inventaris');
    }
}
