@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Barang
			  	<div class="panel-title pull-right"><a href="{{ route('Barang.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
						<th>No</th>
						<th>Kategori</th>
					  <th>Nama Barang</th>
						<th>Harga</th>
						<th>Deskripsi</th>
						<th>Foto</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($barangs as $data)
				  	  <tr>
							<td>{{ $no++ }}</td>
							<td><p> {{ $data->kategori->kategori }} </p></td>
							<td><p>{{ $data->nama_barang }}</p></td>
				    	<td><p>{{ $data->harga }}</p></td>
							<td><p>{!!str_limit($data->deskripsi)!!}</p></td>
							<td><img src="{{ asset('assetsss/dist/img/'.$data->foto.'')}}" width="70" height="70"></td>			    	
<td>
	<a class="btn btn-success" href="{{ route('Barang.edit',$data->id) }}">Edit</a>
</td>
<td>
	<form method="post" action="{{ route('Barang.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger">Delete</button>
	</form>
</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection