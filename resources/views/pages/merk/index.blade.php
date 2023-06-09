@extends('template.master')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Merk</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Data Merk</li>
            </ol>
            <a href="/merk/create" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Merk</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($merkData as $merk)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$merk->merk}}</td>
                                <td>
                                    <a href="/merk/edit/{{ $merk->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/merk/delete/{{ $merk->id }}" class="btn btn-danger">Hapus</a>
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
