<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $fillable = ['nama_barang','kategori_id','harga','foto','deskripsi','slug'];
    public function kategori()
    {
        return $this->belongsTo('App\kategori', 'kategori_id');
    }
    public function User()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}