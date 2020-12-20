@extends('layouts.app')

@section('content')
<!-- Navigation -->
<div>
<div class="container">
    <div class="row justify-content-center">
    <div  class="col-md-12 mb-5">
    <h1 class="text-center"><strong>K-pop Album</strong></h1>
    </div>
    @foreach($barangs as $barang)
        <div class="col-md-3 mb-8">
        <div class="card" style="width: 17rem;" >
            <img class="card-img-top" src="{{url('uploads')}}/{{$barang->gambar}}" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title"><strong>{{$barang->nama_album}}</strong></h5>
            <p class="card-text">{{$barang->keterangan}}</p>
            <p class="card-text"><strong>Artis   : </strong>{{$barang->Artis}}</p>
            <p class="card-text"><strong>Tanggal Rilis   : </strong>{{$barang->tanggal_rilis}}</p>
            <p class="card-text"><strong>Produser   : </strong>{{$barang->produser}}</p>
            <p class="card-text"><strong>Genre   : </strong>{{$barang->Genre}}</p>
            <p class="card-text"><strong>Harga  :Rp. </strong>{{number_format($barang->harga)}}</p>
            <p class="card-text"><strong>Stock   : </strong>{{$barang->stock}}</p>
            <a href="{{url('pesan')}}/{{$barang->id}}" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
            </svg> Pesan</a>
        </div>
        </div>
    </div>
    @endforeach
    </div>
</div>
</div>
</body>
</html>
@endsection
