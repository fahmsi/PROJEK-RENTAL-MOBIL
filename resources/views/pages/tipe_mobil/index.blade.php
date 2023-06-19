@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tipe Mobil</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Data Tipe Mobil</li>
            </ol>
            <a href="/tipemobil/create" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tipe Mobil</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tipeMobilData as $tipeMobil)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$tipeMobil->tipe}}</td>
                                <td>
                                    <a href="/tipemobil/edit/{{ $tipeMobil->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/tipemobil/delete/{{ $tipeMobil->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
