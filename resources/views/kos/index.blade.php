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
                            <td>{{ $i_kos->getKamar->count() }}</td>
                            <td>
                                <a href="/admin/kos/{{ $i_kos->id }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                <a href="/admin/kos/{{ $i_kos->id }}/edit" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
@endsection
