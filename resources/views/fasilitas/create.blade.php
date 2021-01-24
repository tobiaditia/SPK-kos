@extends('layouts.app_admin_lte')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Fasilitas</h3>
        </div>
        <div class="card-body">
            <form action="/admin/fasilitas" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary w-100">Simpan</button>
            </form>
        </div>
    </div>
@endsection
