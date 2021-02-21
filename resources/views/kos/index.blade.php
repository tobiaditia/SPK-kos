@extends('layouts.app_admin_lte')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Kos</h3>
            <div class="float-right">
                <a href="/admin/kos/create" class="btn btn-sm btn-success">Tambah</a>
            </div>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Nama</th>
                        <th>Jumlah Kamar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kos as $i_kos)
                        <tr>
                            <td>{{ $loop->iteration + $kos->firstItem() - 1 }}</td>
                            <td>{{ $i_kos->nama }}</td>
                            <td>{{ $i_kos->kamar->count() }}</td>
                            <td>
                                {{-- <a href="/admin/kos/{{ $i_kos->id }}" data-id="{{ $i_kos->id }}" class="btn btn-sm btn-primary show"><i class="fas fa-eye"></i></a> --}}
                                <button data-id="{{ $i_kos->id }}" class="btn btn-sm btn-primary show"><i
                                        class="fas fa-eye"></i></button>
                                <a href="/admin/kos/{{ $i_kos->id }}/edit" class="btn btn-sm btn-success"><i
                                        class="fas fa-edit"></i></a>
                                <form action="/admin/kos/{{ $i_kos->id }}" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button onclick="return confirm('Apakah Anda Yakin ?')" type="submit"
                                        class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                                <a href="/admin/kos/{{ $i_kos->id }}/kamar" class="btn btn-sm btn-primary">
                                    <i class="fas fa-list"></i> Lihat Kamar
                                </a>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
            <br>
            {{ $kos->links() }}
        </div>
    </div>
    <x-modalShow titleModal="Detail Kos" type="kos" size="modal-lg" />

    <script>
        $(document).ready(function() {
            $('body').on('click', '.show', function() {
                var data_id = $(this).data('id');
                $.get('kos/' + data_id, function(data) {
                    $('#show-modal').modal('show');

                    $('#gambar_kos').attr("src", "/img/kos/" + data.gambar);
                    $('#nama').text(data.nama);
                    $('#id_lokasi').text(data.area.kabupaten + ' , KEC. ' + data.area.kecamatan +
                        ' , KEL. ' + data.area.kelurahan);
                    $('#deskripsi').text(data.deskripsi);
                    $('#no_hp').text(data.no_hp);
                })
            });
        });

    </script>
@endsection
