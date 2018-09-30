<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\kategori;
use App\User;
class FrontendController extends Controller
{
    public function index()
    {
        return view ('layouts.guest');
    }
    public function produk()
    {
        $barangs = barang::all();
        return view ('barang1.index',compact('barangs')); 
    }
    // public function produk()
    // {
    //     $barangs = barang::all();
    //     return view ('Barang.index',compact('barangs'));
    // }
    public function view()
    {
        $barangs = barang::all();
        return view('BLOG.blog-home',compact('barangs'));
    }
    public function show($id)
    {
        $barangs = barang::findorFail($id);
        return view ('BLOG.show',compact('barangs'));
    }
}
