@extends('layouts.app_public')

@section('content')

    <section id="hero">

        <div class="container">
            <div class="row d-flex align-items-center">
                <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
                    <h1>Hai, Selamat Datang</h1>
                    <h2><b>KOS IDAMAN</b> merupakan aplikasi yang digunakan untuk mencari kos yang sesuai keinginan
                        kamu.</h2>
                    <a href="#about" class="btn-get-started scrollto">Mulai</a>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                    {{-- <img src="assets/img/hero-img.png" class="img-fluid" alt=""> --}}
                    <div class="card mt-4 mb-4">
                        <div class="card-body">
                            <h3 class="text-center">Cari Kos</h3>
                            <form action="/public/cari-kamar-kos" method="GET">
                                <b>Pilih Lokasi</b>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="selectKabkota">Kabupaten/Kota</label>
                                            <select class="form-control select2" id="selectKabkota">
                                                <option value="">--Pilih--</option>
                                                @foreach ($kabkota as $d_kabkota)
                                                    <option value="{{ $d_kabkota->kabupatenkota_code }}">
                                                        {{ $d_kabkota->kabupatenkota_name }}
                                                    </option>

                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="selectKecamatan">Kecamatan</label>
                                            <select class="form-control select2" id="selectKecamatan">
                                                <option value="">--Pilih--</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="selectKelurahan">Kelurahan</label>
                                            <select name="lokasi" class="form-control select2" id="selectKelurahan">
                                                <option value="">--Pilih--</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <b class="col-sm-4 col-form-label text-bold">Harga</b>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-6">
                                                <input name="harga_min" type="number" class="form-control"
                                                    placeholder="Min">
                                            </div>
                                            <div class="col-6">
                                                <input name="harga_max" type="number" class="form-control"
                                                    placeholder="Max">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <b class="col-sm-4 col-form-label text-bold">Pembayaran</b>
                                    <div class="col-sm-8">
                                        <select name="pembayaran" class="form-control">

                                            <option value="">--Pilih--</option>
                                            <option value="perhari">Perhari</option>
                                            <option value="perminggu">Perminggu</option>
                                            <option value="perbulan">Perbulan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <b class="col-sm-4 col-form-label text-bold">Kapasitas</b>
                                    <div class="col-sm-8">
                                        <input name="kapasitas" type="number" class="form-control" placeholder="Kapasitas">
                                    </div>
                                </div>
                                <b>Pilih Fasilitas</b>
                                <div class="form-group mt-2">
                                    <select name="fasilitas[]" class="select2" multiple="multiple"
                                        data-placeholder="Pilih Fasilitas" style="width: 100%;">
                                        @foreach ($fasilitas as $i_fasilitas)
                                            <option value="{{ $i_fasilitas->id }}">{{ $i_fasilitas->nama }}</option>

                                        @endforeach
                                    </select>
                                </div>

                                <input type="submit" name="submit" value="Cari" class="btn btn-success w-100">

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <main id="main">
        <section id="search-kos" class="clients section-bg">
            <div class="container py-4">
                <h5>Sudah Tau Kos yang anda Pilih ?</h5>
                <form action="/public/cari-kos" method="GET">
                    <div class="form-group row pt-3">
                        <div class="col-sm-10">
                            <input name="kos" id="custom-input" type="text" class="form-control"
                                placeholder="Cari Nama Kos">
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" id="custom-button" class="btn btn-success w-100">Cari</button>
                        </div>
                    </div>
                </form>
                <style>
                    #custom-input {
                        border-radius: 30px !important;
                        min-height: 40px !important;
                        line-height: 1.5 !important;
                        /* font-size: 13px; */
                        border: 1px solid #ced4da !important;
                        border-color: border-color: #a177ff !important;
                        border-color: rgb(161 119 255) !important;
                        box-shadow: 0 0 0 0.2rem rgba(161, 119, 255, .5) !important;
                        padding: 0 20px !important;
                    }

                    #custom-button {
                        border-radius: 30px;
                        min-height: 40px;
                        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, .5);
                    }

                </style>
            </div>
        </section><!-- End Clients Section -->

        <section id="rekomendasi" class="section-bg">
            <div class="container">

                <div class="row">
                    @foreach ($kamar as $i_kamar)

                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card shadow-sm border-0 transform-on-hover mb-0">
                                <a class="lightbox" href="/public/kamar/{{ $i_kamar->id }}">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <img src="{{ url('img/kos/') . '/' . $i_kamar->gambar }}" alt="Card Image"
                                            class="card-img-top embed-responsive-item">
                                    </div>
                                </a>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6><a href="/public/kamar/{{ $i_kamar->id }}"
                                                class="text-success">{{ $i_kamar->nama }}</a></h6>
                                        <span> <b>{{ $i_kamar->kapasitas }}</b> <i class="fas fa-users"></i></span>
                                    </div>
                                    <small>{{ $i_kamar->kos->nama }}</small>
                                    <p>@currency($i_kamar->harga) <i>( {{ $i_kamar->pembayaran }} )</i></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
        {{-- <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2 data-aos="fade-in">Kontak</h2>
                    <p data-aos="fade-in"></p>
                </div>

                <div class="row">

                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box" data-aos="fade-up">
                                    <i class="bx bx-map"></i>
                                    <h3>Alamat</h3>
                                    <p>Jl. Panjerejo - Rejotangan No.20 Rt.04 Rw.01 Dsn.Banjarsari Lor Ds.Banjarejo
                                        Kec.Rejotangan
                                        Kab.Tulungagung</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email</h3>
                                    <p>tobiaditia549@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Ponsel</h3>
                                    <p>+6285895402090</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section> --}}

    </main><!-- End #main -->

@endsection
