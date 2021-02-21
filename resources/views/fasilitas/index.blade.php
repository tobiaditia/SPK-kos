@extends('layouts.app_admin_lte')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Fasilitas</h3>
            <div class="float-right">
                <a href="/admin/fasilitas/create" class="btn btn-sm btn-success">Tambah</a>
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
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fasilitas as $i_fasilitas)
                        <tr>
                            <td>{{ $loop->iteration + $fasilitas->firstItem() - 1 }}</td>
                            <td>{{ $i_fasilitas->nama }}</td>
                            <td>
                                <a href="/admin/fasilitas/{{ $i_fasilitas->id }}/edit" class="btn btn-sm btn-success"><i
                                        class="fas fa-edit"></i></a>
                                <form action="/admin/fasilitas/{{ $i_fasilitas->id }}" method="POST" class="d-inline">
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
            {{ $fasilitas->links() }}
        </div>
    </div>
@endsection
