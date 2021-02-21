@if ($type == 'kabkota')
    @php
        $kabkota = DB::table('v_kabkota')->get();
    @endphp
    <div class="form-group col-sm-12 col-md-6">
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
@elseif ($type == 'kecamatan')
    <div class="form-group col-sm-12 col-md-6">
        <label for="selectKecamatan">Kecamatan</label>
        <select class="form-control select2" id="selectKecamatan">
            <option value="">--Pilih--</option>
        </select>
    </div>
@elseif ($type == 'kelurahan')
    <div class="form-group col-sm-12 col-md-6">
        <label for="selectKelurahan">Kelurahan</label>
        <select name="id_lokasi" class="form-control select2" id="selectKelurahan">
            <option value="">--Pilih--</option>
        </select>
    </div>
@endif
