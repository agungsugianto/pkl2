@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Galeri Universitas
			  	<div class="panel-title pull-right"><a href="{{ route('galeri.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		<th>No</th>
					  <th>Gambar</th>
					  <th>Keterangan</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($galeris as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				      <td><img src="{{ asset('assetsss/dist/img/'.$data->gambar.'')}}" width="70" height="70"></td>
				    	<td><p>{{ $data->keterangan }}</p></td>			    	
<td>
	<a class="btn btn-success" href="{{ route('galeri.edit',$data->id) }}">Edit</a>
</td>
<td>
	<form method="post" action="{{ route('galeri.destroy',$data->id) }}">
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