@extends('layouts.app')

@section('content')

<!-- Navigation -->
<div>
<section class="page-section cta">
          <div class="container">
        <div class="row"> 
        <div class= "col-md-12">
            <a href="{{url('history')}}" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
            </svg>Kembali
            </a>
        </div>
        <div class="col-md-12 mt-2">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{url('history')}}">History</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Pemesanan</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>Sukses Check-Out</h3>
                    <h5>Anda sudah sukses check-out selanjutnya untuk pembayaran silahkan lakukan transfer di rekening
                    <strong> Bank BNI Nomor Rekening 31123-098172-987 </strong> dengan nominal <strong> Rp.{{number_format($pesanan->jumlah_harga)}}</strong></h5> 
                </div>
            </div>
        </div>    
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-body">
                <h3><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                </svg>  Detail Pemesanan</h3>
                @if(!empty($pesanan))
                <p align="right">Tanggal Pesan : {{$pesanan->tanggal}} </p>
                <table class="table">
                    <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Gambar</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                            </tr>                  
                    </thead>
                    <tbody>
                    <?php $no =1; ?>
                    @foreach($pesanan_details as $pesanan_detail)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$pesanan_detail->barang->nama_album}}</td>
                                <td>
                                <img src="{{url('img')}}/{{$pesanan_detail->barang->gambar}}" width= "100" alt="">
                                </td>
                                <td>{{$pesanan_detail->jumlah}}</td>
                                <td align="left">Rp. {{number_format ($pesanan_detail->barang->harga)}}</td>
                                <td align="left">Rp. {{number_format ($pesanan_detail->jumlah_harga)}}</td>
                                <td>

                            </tr>   
                    @endforeach  
                        <tr>
                            <td colspan="4" align="right"><strong>Total Harga</strong></td>
                            <td align="right"><strong>Rp.{{number_format($pesanan->jumlah_harga)}}</strong></td>
                        </tr>                  
                        <tr>
                            <td colspan="4" align="right"><strong>Kode Unik : </strong></td>
                            <td align="right"><strong>{{$pesanan->kode}}</strong></td>
                        </tr>     
                        <tr>
                            <td colspan="4" align="right"><strong>Total Yang Harus Ditransfer : </strong></td>
                            <td align="right"><strong>Rp.{{number_format($pesanan->jumlah_harga)}}</strong></td>
                        </tr>     
                    </tbody>
                </table>
                @endif
                </div>     
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<div>
</body>

</html>

@endsection
