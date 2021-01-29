@extends('layouts.app_public')

@section('content')

    <main id="main">

        <section id="rekomendasi" class="section-bg">
            <div class="container">

                <div class="card card-solid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <h3 class="d-inline-block d-sm-none">{{ $kamar->nama }}
                                </h3>
                                <div class="col-12">
                                    <img src="/img/kos/{{ $kamar->gambar }}" class="product-image" alt="Product Image">
                                </div>
                                <div class="col-12 product-image-thumbs">
                                    <div class="product-image-thumb active"><img src="/img/kos/{{ $kamar->gambar }}"
                                            alt="Product Image"></div>
                                    <div class="product-image-thumb"><img src="../../dist/img/prod-2.jpg"
                                            alt="Product Image"></div>
                                    <div class="product-image-thumb"><img src="../../dist/img/prod-3.jpg"
                                            alt="Product Image"></div>
                                    <div class="product-image-thumb"><img src="../../dist/img/prod-4.jpg"
                                            alt="Product Image"></div>
                                    <div class="product-image-thumb"><img src="../../dist/img/prod-5.jpg"
                                            alt="Product Image"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <h3 class="mb-3">{{ $kamar->nama }}</h3>
                                <p>{{ $kamar->kos->deskripsi }}</p>
                                Pemilik : <a href="/public/kos/{{ $kamar->kos->id }}">{{ $kamar->kos->nama }}</a>
                                <hr>
                                <h4>Fasilitas</h4>
                                @if (count($kamar->fasilitas) > 0)
                                    <ul>
                                        @foreach ($kamar->fasilitas as $fasilitas)
                                            <li>{{ $fasilitas->nama }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    Kosong
                                @endif

                                <hr>
                                <h4>Kapasitas :
                                    <b>{{ $kamar->kapasitas }}</b> <i class="fas fa-users"></i>
                                </h4>

                                <div class="bg-gray py-2 px-3 mt-4">
                                    <h2 class="mb-0">
                                        @currency($kamar->harga)
                                    </h2>
                                    <h4 class="mt-0">
                                        <small>Sistem Pembayaran : {{ $kamar->pembayaran }}</small>
                                    </h4>
                                </div>

                                <table class="mt-4">
                                    <tr>
                                        <td><i class="fas fa-phone-square fa-2x"></i></td>
                                        <td>{{ $kamar->kos->no_hp }}</td>
                                    </tr>
                                    
                                         
                                </table>

                            </div>
                        </div>
                        
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        </section>

    </main><!-- End #main -->
@endsection
