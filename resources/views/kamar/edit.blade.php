@extends('layouts.app_admin_lte')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Data Kamar</h3>
        </div>
        <div class="card-body">
            <form action="/admin/kos/{{ $kos->id }}/kamar/{{ $kamar->id }}" method="POST"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <input type="hidden" name="kos_id" value="{{ $kos->id }}">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $kamar->nama }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kapasitas" class="col-sm-2 col-form-label">Kapasitas</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="kapasitas" name="kapasitas"
                            value="{{ $kamar->kapasitas }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="harga" name="harga" value="{{ $kamar->harga }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Pembayaran</label>
                    <div class="col-sm-10">
                        <select class="custom-select" name="pembayaran">
                            <option {{ $kamar->pembayaran == 'perhari' ? 'selected' : '' }} value="perhari">Per Hari
                            </option>
                            <option {{ $kamar->pembayaran == 'perminggu' ? 'selected' : '' }} value="perminggu">Per Minggu
                            </option>
                            <option {{ $kamar->pembayaran == 'perbulan' ? 'selected' : '' }} value="perbulan">Per Bulan
                            </option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <img id="image_preview_container" src="{{ asset('img/kos/') . '/' . $kamar->gambar }}"
                            alt="preview image" style="max-height: 150px;">
                        <span id="image_preview_container_ket"><i></i></span>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Fasilitas</label>
                    <div class="col-sm-10">
                        <div class="border p-2">
                            <div class="row">
                                @foreach ($fasilitas as $i_fasilitas)
                                    <div class="col-sm-2 col-md-3 mb-2">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"
                                                id="fasilitas{{ $i_fasilitas->id }}" name="fasilitas[]"
                                                value="{{ $i_fasilitas->id }}"
                                                {{ in_array($i_fasilitas->id, $has_fasilitas) ? 'checked' : '' }}>
                                            <label for="fasilitas{{ $i_fasilitas->id }}"
                                                class="custom-control-label">{{ $i_fasilitas->nama }}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary w-100">Simpan</button>
            </form>
        </div>
    </div>
@endsection
