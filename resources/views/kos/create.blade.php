@extends('layouts.app_admin_lte')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Kos</h3>
        </div>
        <div class="card-body">
            <form action="/admin/kos" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input required type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <x-select type="kabkota" />
                            <x-select type="kecamatan" />
                            <x-select type="kelurahan" />
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea name="deskripsi" rows="5" class="form-control" id="deskripsi"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_hp" class="col-sm-2 col-form-label">Nomor HP</label>
                    <div class="col-sm-10">
                        <input required type="number" class="form-control" id="no_hp" name="no_hp">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <img id="image_preview_container" src="{{ asset('img/kos/sampul_kos.jpg') }}" alt="preview image"
                            style="max-height: 150px;">
                        <span id="image_preview_container_ket"><i>Gambar Default</i></span>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary w-100">Simpan</button>
            </form>
        </div>
    </div>
    <script>


    </script>
@endsection
