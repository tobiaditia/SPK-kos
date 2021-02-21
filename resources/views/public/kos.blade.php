@extends('layouts.app_public')

@section('content')

    <main id="main">
        <div class="section-bg pt-4">
            <div class="container">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ url('img/kos/') . '/' . $kos->gambar }}" class="card-img-top">

                            </div>
                            <div class="col-md-8">
                                <h4>{{ $kos->nama }}</h4>
                                <p class="card-text">{{ $kos->deskripsi }}</p>
                                <table>
                                    <tr>
                                        <td>Lokasi</td>
                                        <td>:</td>
                                        <td class="text-bold">
                                            Kab/Kota {{ $area['kabupaten'] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td class="text-bold">
                                            Kecamatan {{ $area['kecamatan'] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td class="text-bold">
                                            Kelurahan {{ $area['kelurahan'] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Hp</td>
                                        <td>:</td>
                                        <td class="text-bold">{{ $kos->no_hp }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    @foreach ($kos->kamar as $i_data)
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card shadow-sm border-0 transform-on-hover mb-0">
                                <a class="lightbox" href="/public/kamar/{{ $i_data->id }}">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <img src="{{ url('img/kos/') . '/' . $i_data->gambar }}" alt="Card Image"
                                            class="card-img-top embed-responsive-item">
                                    </div>
                                </a>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6><a href="/public/kamar/{{ $i_data->id }}"
                                                class="text-success">{{ $i_data->nama }}</a></h6>
                                        <span> <b>{{ $i_data->kapasitas }}</b> <i class="fas fa-users"></i></span>
                                    </div>
                                    <small>{{ $kos->nama }}</small>
                                    <p>@currency($i_data->harga) <i>( {{ $i_data->pembayaran }} )</i></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- {{ $data->links() }} --}}

            </div>
        </div>

    </main><!-- End #main -->
@endsection
