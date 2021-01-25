@extends('layouts.app_admin_lte')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Data Kos</h3>
        </div>
        <div class="card-body">
            <form action="/admin/kos" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $kos->nama }}">
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
                        <textarea name="deskripsi" rows="5" class="form-control" id="deskripsi">{{ $kos->deskripsi }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_hp" class="col-sm-2 col-form-label">Nomor HP</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="no_hp" name="no_hp" value="{{ $kos->no_hp }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary w-100">Simpan</button>
            </form>
        </div>
    </div>
    <script>
        var val_kabkota_code;
        var val_kecamatan_code;
        $('#selectKabkota').change(function() {
            val_kabkota_code = $(this).val();
            $('#selectKelurahan').empty();
            if (val_kabkota_code) {
                $.ajax({
                    url: "{{ url('/public/get-kecamatan') }}/" + val_kabkota_code,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('#selectKecamatan').empty();
                        $.each(data, function(key, value) {
                            $('#selectKecamatan').append('<option value="' + value
                                .kecamatan_code + '">' +
                                value.kecamatan_name + '</option>');
                        });


                    }
                });
            } else {
                $('#selectKecamatan').empty();
            }
        });

        $('#selectKecamatan').change(function() {
            val_kecamatan_code = $(this).val();
            console.log(val_kabkota_code);
            console.log(val_kecamatan_code);
            if (val_kecamatan_code) {
                $.ajax({
                    url: "{{ url('/public/get-kelurahan') }}/" + val_kabkota_code + "/" +
                        val_kecamatan_code,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('#selectKelurahan').empty();
                        $.each(data, function(key, value) {
                            $('#selectKelurahan').append('<option value="' + value
                                .area_code + '">' +
                                value.kelurahan_name + '</option>');
                        });


                    }
                });
            } else {
                $('#selectKecamatan').empty();
            }
        });

    </script>
@endsection
