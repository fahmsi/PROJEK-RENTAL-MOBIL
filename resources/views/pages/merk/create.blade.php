@extends('template.master') 
 
@section('content') 
    <div class="container-fluid px-4"> 
        <h1 class="mt-4">Merk</h1> 
        <div class="d-flex justify-content-between mb-3"> 
            <ol class="breadcrumb"> 
                <li class="breadcrumb-item active">Tambah Data Merk</li> 
            </ol> 
            <a href="/merk" class="btn btn-warning">kembali</a> 
        </div> 
        <div class="card shadow"> 
            <div class="card-body"> 
                <form action="/merk/simpan-data" method="POST"> 
                    @csrf 
                    <div class="form-group"> 
                        <label for="">Merk Mobil</label> 
                        <input type="text" class="form-control" name="merk" required> 
                    </div> 
                    <div class="form-group mt-3"> 
                        <button class="form-control btn btn-primary" type="submit">Simpan</button> 
                    </div> 
                </form> 
            </div> 
        </div> 
    </div> 
@endsection