@extends('layouts.guest')
@section('content')
<section class="post-content-area single-post-area">

				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">
							<div class="single-post row">
								<div class="col-lg-12">
									<div class="feature-img">
										<div class="feature-img">
										<h1>{{$barangs->kategori->kategori}}</h1>
										<img src="{{asset('assetsss/dist/img/'.$barangs->foto) }}"  
										 style="max-height: 8  00px;max-width: 800px;margin-top: 10px">
										 <u>{{ $barangs->nama_barang }}</u><br>
                        {{$barangs->deskripsi}}<br>
                        <p style="background: #B22222;"><font color="white">Rp.&nbsp{{ $barangs->harga }}</p></font><br><br></center>
                        </div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
          
@endsection