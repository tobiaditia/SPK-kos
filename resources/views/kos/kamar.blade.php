@extends('layouts.app_admin_lte')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List Kamar Kos <b> -- {{ $nama_kos }} --</b></h3>
            <div class="float-right">
                <a href="/admin/kos/{{ $id }}/kamar/create" class="btn btn-sm btn-success">Tambah</a>
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
                        <th>Kapasitas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($kamar->count() == 0)
                        <tr>
                            <td colspan="4" class="text-center bg-secondary">Data Kosong</td>
                        </tr>
                    @endif
                    @foreach ($kamar as $i_kamar)
                        <tr>
                            <td>{{ $loop->iteration + $kamar->firstItem() - 1 }}</td>
                            <td>{{ $i_kamar->nama }}</td>
                            <td>{{ $i_kamar->kapasitas }}</td>
                            <td>
                                <button type="button" data-idkos="{{ $id }}" data-id="{{ $i_kamar->id }}"
                                    class="show btn btn-sm btn-primary">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <a href="/admin/kos/{{ $id }}/kamar/{{ $i_kamar->id }}/edit"
                                    class="btn btn-sm btn-success">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="/admin/kos/{{ $id }}/kamar/{{ $i_kamar->id }}/destroy"
                                    method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button onclick="return confirm('Apakah Anda Yakin ?')" type="submit"
                                        class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <br>
            {{ $kamar->links() }}
        </div>
    </div>
    <x-modalShow titleModal="Detail Kamar" type="kamar" size="modal-lg" />
    <script>
        $(document).ready(function() {
            $('body').on('click', '.show', function() {
                var data_id_kos = $(this).data('idkos');
                var data_id = $(this).data('id');
                var list = '';
                $.get('/admin/kos/' + data_id_kos + '/kamar/' + data_id, function(data) {
                    console.log(data);
                    $('#show-modal').modal('show');

                    $('#gambar_kamar').attr("src", "/img/kos/" + data.gambar);
                    $('#namakos').text(data.kos.nama);
                    $('#namakamar').text(data.nama);
                    $('#kapasitas').text(data.kapasitas);
                    $('#harga').text('Rp. ' + data.harga);
                    $('#pembayaran').text(data.pembayaran);
                    $.each(data.fasilitas, function(index, value) {
                        list += '<li>' + value.nama + '</li>';
                    });
                    $('#fasilitas').html('<ul>' + list + '</ul>');
                })
            });
        });

    </script>
@endsection
