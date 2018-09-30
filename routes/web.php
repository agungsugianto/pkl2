<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.guest');
});
Route::get('about', function () {
    return view('layouts.about');
});
Route::get('gallery', function () {
    return view('layouts.gallery');
});
Route::get('Blogdetail', function () {
    return view('layouts.Blogdetail');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function () {
    Route::resource('Barang', 'BarangController');
    Route::resource('kategori', 'KategoriController');
    Route::resource('galeri', 'GaleriController');
});
Route::get('blog','FrontController@blog');
Route::get('blog/{id}', array('as' => 'singleblog', 'uses' =>'FrontController@singleblog'));

//Frontend
Route::resource('index','FrontendController');
Route::get('/','FrontendController@produk')->name('barang1');
//slug
Route::get('/BLOG','FrontendController@view');
Route::get('/BLOG/{barangs}','FrontendController@show')->name('BLOG');

