@extends('layouts.app_admin_lte')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Kamar</h3>
        </div>
        <div class="card-body">
            <form action="/admin/kos/{{ $kos->id }}/kamar/store" method="POST">
                @csrf
                <input type="hidden" name="kos_id" value="{{ $kos->id }}">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kapasitas" class="col-sm-2 col-form-label">Kapasitas</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="kapasitas" name="kapasitas">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="harga" name="harga">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Pembayaran</label>
                    <div class="col-sm-10">
                        <select class="custom-select" name="pembayaran">
                            <option value="perhari">Per Hari</option>
                            <option value="perminggu">Per Minggu</option>
                            <option value="perbulan">Per Bulan</option>
                        </select>
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
                                                value="{{ $i_fasilitas->id }}">
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
