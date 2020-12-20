@extends('layouts.app')

@section('content')
<div>
<!-- Navigation -->
<section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
          <div class="container">
        <div class="row">
        <div class= "col-md-1">
            <a href="{{url('store')}}" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
            </svg>Kembali
            </a>
        </div>
        <div class="col-md-12 mt-2">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$barang->nama_album}}</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-header">
                    <h4>{{$barang->nama_album}}</h4>
                </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{url('img')}}/{{$barang->gambar }}" width="250" alt="">
                            </div>
                                <div class="col-md-6 mt-2">
                                <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{number_format($barang->harga)}}</td>
                                    </tr>
                                    <tr>
                                        <td>Stock</td>
                                        <td>:</td>
                                        <td>{{number_format($barang->stock)}}</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td>{{$barang->keterangan}}</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Jumlah Beli</td>
                                        <td>:</td>
                                        <td>
                                          <form action="{{url('pesan')}}/{{$barang->id}}" method="post">
                                            @csrf
                                              <input type="text" name="jumlah_pesan" class="form-control" required="">
                                              <button type="submit" class="btn btn-primary mt-3">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                              <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                              </svg>
                                              Masukkan Keranjang</button>
                                              </form>
                                            </td>
                                        </tr>
                                    </tbody>
                              </table>
                                    </div>
                        </div>
                    </div>
            </div>
        </div>

    </div>
</div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</body>
</html>

@endsection
