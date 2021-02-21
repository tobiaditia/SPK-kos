@extends('layouts.app_public')

@section('content')

    <main id="main">

        <div class="section-bg pt-4">
            <div class="container">
                <h4>Hasil Pencarian</h4>
                <div class="row pt-3">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="callout callout-info h-100">
                            <ul>
                                @foreach ($search as $k_search => $v_search)
                                    @if ($k_search != 'fasilitas')
                                        <li>{{ $k_search }} : <b>{{ empty($v_search) ? 'Semua' : $v_search }}</b></li>
                                    @else
                                        @if (empty($v_search))
                                            <li>{{ $k_search }} : <b>Semua</b></li>
                                        @else
                                            <li>{{ $k_search }} :
                                                <ul>
                                                    @foreach ($fasilitas as $k_fasilitas)
                                                        <li><b>{{ $k_fasilitas->nama }}</b></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @if (count($data) < 1)
                        <div class="col-md-6 col-lg-8 mb-4">
                            <div
                                class="border border-primary rounded bg-dark p-5 h-100 d-flex justify-content-center align-items-center">
                                <b>Data Kosong</b>
                            </div>
                        </div>
                    @endif
                    @foreach ($data as $i_data)
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
                                    <small>{{ $i_data->kos->nama }}</small>
                                    <p>@currency($i_data->harga) <i>( {{ $i_data->pembayaran }} )</i></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $data->links() }}

            </div>
        </div>

    </main><!-- End #main -->
@endsection
