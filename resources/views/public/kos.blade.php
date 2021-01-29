@extends('layouts.app_public')

@section('content')

    <main id="main">

        <div class="section-bg pt-4">
            <div class="container">
                <h4>{{ $kos->nama }}</h4>
                <div class="row pt-3">
                    @foreach ($data as $i_data)
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card shadow-sm border-0 transform-on-hover mb-0">
                                <a class="lightbox" href="/public/kamar/{{ $i_data->id }}">
                                    <img src="{{ url('img/kos/default.jpg') }}" alt="Card Image" class="card-img-top">
                                </a>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6><a href="#" class="text-success">{{ $i_data->nama }}</a></h6>
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
