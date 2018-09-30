@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1><u> {{ $barangs->Kategori->kategori }}</h1></u>
        <img src="{{ asset('assetsss/dist/img/'.$barangs->foto.'') }}" style="width=100px; height=250x;" alt="">
        <h2>{{ $barangs->nama_barang }}</h2>
        <h2>{{ $barangs->harga }}</h2>
        <h5>Published: {{ date('M j, Y', strtotime($barangs->created_at)) }}</h5>
        <p>{!! $barangs->konten !!}</p>
        <hr>
    </div>
</div>
<div id="disqus_thread"></div>
@push('scripts')
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://pkl-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
@endpush
@endsection