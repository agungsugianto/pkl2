<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\kategori;
use File;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = barang::with('kategori')->get();
        return view('Barang.index',compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori::all();     
        return view('Barang.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_barang' => 'required',
            'kategori_id' => 'required',
            'harga' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required'
        ]);

        $barangs = new barang;
        $barangs->nama_barang = $request->nama_barang;
        $barangs->kategori_id = $request->kategori_id;
        $barangs->harga = $request->harga;
        $barangs->deskripsi = $request->deskripsi;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assetsss/dist/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);
            $barangs->foto = $filename;
        }
        $barangs->slug=str_slug($request->kategori,'-');

        $barangs->save();
        return redirect()->route('Barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangs = barang::findorFail($id);
        return view('blog.blog-single',compact('barangs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barangs = barang::findOrFail($id);
        $kategori = kategori::all();
        $selectedKategori = barang::findOrFail($id)->kategori_id;
        return view('Barang.edit',compact('barangs','kategori','selectedKategori'));
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
        $this->validate($request,[
            'nama_barang' => 'required|max:255',
            'kategori_id' => 'required|',
            'harga' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required|'
        ]);
        $barangs = barang::findOrFail($id);
        $barangs->nama_barang = $request->nama_barang;
        $barangs->kategori_id = $request->kategori_id;
        $barangs->harga = $request->harga;
        $barangs->deskripsi = $request->deskripsi;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assetsss/dist/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);
        if ($barangs->foto){
            $old_foto = $barangs->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . '/assetsss/img/'
            . DIRECTORY_SEPARATOR . $barangs->foto;
              try{
                  file::delete($filepath);
              } catch (FileNotFoundException $e) {

              }

        }
            $barangs->foto = $filename;
        }
        $barangs->save();
        return redirect()->route('Barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barangs = barang::findOrFail($id);
        $barangs->delete();
        return redirect()->route('Barang.index');
    }
}