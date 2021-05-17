<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){

        $kategori = Kategori::All();

        return view('kategori.index',compact('kategori'));
    }

    public function create()
    {
        return view('kategori.tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
    		'kategori_name' =>array('required','regex:/(^([a-zA-Z\s]+)(\d+)?$)/u')

    	]);

        Kategori::create([
    		'kategori_name' => $request->kategori_name,

    	]);
        // alert()->success('Kategori Telah ditambahkan', 'Sukses');

    	return redirect('/kategori');
    }

    public function edit(Kategori $kategori, $id)
    {
        $kategori = Kategori::find($id);
         return view('kategori.edit', ['kategori' => $kategori]);
    }

    public function update(Request $request, Kategori $kategori , $id)
    {
        $this->validate($request,[
            'kategori_name' => array('required','regex:/(^([a-zA-Z\s]+)(\d+)?$)/u')

         ]);

         $kategori = Kategori::find($id);
         $kategori->kategori_name = $request->kategori_name;

         $kategori->save();
         return redirect('/kategori');
    }

    public function delete($id)
    {
            $kategori = Kategori::find($id);
            $kategori->delete();
            // alert()->error('Data Pupuk telah dihapus', 'Delete');
            return redirect('/kategori');
    }
}
