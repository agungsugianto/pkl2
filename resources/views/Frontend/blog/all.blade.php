@extends('Template.guest')
@section('css')

@endsection
@section('content')
<div class="row">
		<div class="col-md-8 col-md-offset-2">
		</div>
	</div>

    @foreach ($barangs as $data)
   
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>{{ $data->judul }}</h2>
            <p>{!! str_limit($data->konten,1000) !!}</p>
			<h2>Data Barang</h2>
			<img src="{{ asset('assetsss/dist/img/we.png') }}">
            <a href="{{ route('singleblog',$data->id) }}" class="btn btn-primary">Read More</a>
            <h5>Published: {{ date('M j, Y', strtotime($data->created_at)) }}</h5>
			<hr>
        </div>
    </div>
   
	@endforeach

	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				{!! $barangs->links() !!}
			</div>
		</div>
	</div>
@endsection