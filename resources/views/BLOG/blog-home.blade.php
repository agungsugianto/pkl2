@extends('layouts.guest')
@section('content')
<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                <center>
        <font size="8" face="Courier New" color="black">
        <h1><p style="background: #87CEEB;text-align:center;padding:4px;font-size:160%;color:#000;">
<u>Produk Barang</u></p>
        </h1></font><br><br>
                    <section>
                    @foreach($barangs as $data)
                        <div class="col-md-6">
                        <center><p style="background: #4682B4;"><font size="8" face="Courier New" ><a class="posts-title" href="/BLOG/{{$data->id}}">
                        {{ $data->kategori->kategori }}</a></p>
                        <img src="{{ asset('assetsss/dist/img/'.$data->foto.'')}}" style="max-height:300px;max w"></font><br>
                        <u>{{ $data->nama_barang }}</u><br>
                        {!!str_limit($data->deskripsi) !!}<br>
                        <p style="background: #B22222;"><font color="white">Rp.&nbsp{{ $data->harga }}</p></font><br><br></center>
                        </div> 
                        @endforeach
                        </section>
                        </div></div></div>
                        @include('Partial.tawk-to')
@endsection
