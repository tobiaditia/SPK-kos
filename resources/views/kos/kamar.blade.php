@extends('layouts.app_admin_lte')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List Kamar</h3>
            <div class="float-right">
                <a href="/admin/kos/{{ $id }}/kamar/create" class="btn btn-sm btn-success">Tambah</a>
            </div>
        </div>
        <div class="card-body">
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
                    @foreach ($kamar as $i_kamar)
                        <tr>
                            <td>{{ $loop->iteration + $kamar->firstItem() - 1 }}</td>
                            <td>{{ $i_kamar->nama }}</td>
                            <td>{{ $i_kamar->kapasitas }}</td>
                            <td>
                                <a href="/admin/kos/{{ $id }}/kamar/{{ $i_kamar->id }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="/admin/kos/{{ $id }}/kamar/{{ $i_kamar->id }}/edit" class="btn btn-sm btn-success">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="/admin/kos/{{ $id }}/kamar/{{ $i_kamar->id }}/destroy" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
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
@endsection
