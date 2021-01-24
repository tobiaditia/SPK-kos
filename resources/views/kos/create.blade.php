@extends('layouts.app_admin_lte')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Kos</h3>
        </div>
        <div class="card-body">
            <form action="/admin/kos/store" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="provinsi">Provinsi</label>
                                <select class="custom-select" id="provinsi">
                                    <option value="perhari">Per Hari</option>
                                    <option value="perminggu">Per Minggu</option>
                                    <option value="perbulan">Per Bulan</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="kebupaten">Kabupaten/Kota</label>
                                <select class="custom-select"  id="kebupaten">
                                    <option value="perhari">Per Hari</option>
                                    <option value="perminggu">Per Minggu</option>
                                    <option value="perbulan">Per Bulan</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="kecamatan">Kecamatan</label>
                                <select class="custom-select"  id="kecamatan">
                                    <option value="perhari">Per Hari</option>
                                    <option value="perminggu">Per Minggu</option>
                                    <option value="perbulan">Per Bulan</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="kelurahan">Kelurahan</label>
                                <select class="custom-select" name="lokasi" id="kelurahan">
                                    <option value="perhari">Per Hari</option>
                                    <option value="perminggu">Per Minggu</option>
                                    <option value="perbulan">Per Bulan</option>
                                </select>
                            </div>
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
                        <input type="number" class="form-control" id="no_hp" name="no_hp">
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary w-100">Simpan</button>
            </form>
        </div>
    </div>
@endsection
