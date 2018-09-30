<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
class FrontController extends Controller
{
    public function blog()
    {
        $barangs = barang::paginate(6);
        return view('Frontend.blog.all',compact('barangs'));
    }

    public function singleblog($id) 
    {
        $barangs = barang::findOrFail($id);
        return view('Frontend.blog.single',compact('barangs'));
    }
}
