@extends('layouts.app')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Membuat Daftar User</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('m_user.index') }}">Kembali</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Ops</strong> Input gagal<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('m_user.store') }}" method="POST">
    @csrf

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Username:</strong>
            <input type="text" name="username" class="form-control" placeholder="Masukkan username">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama:</strong>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password:</strong>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection





{{-- @extends('layouts.app')

@section('subtitle', 'kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Create')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat Kategori Baru</h3>
            </div>

            <form method="POST" action="../kategori">
                <div class="card-body">
                    <div class="form-group">
                        <label for="kodeKategori">Kode Kategori</label>
                        <input type="text" class="form-control @error('kodeKategori') is-invalid @enderror " id="kodeKategori" name="kodeKategori" placeholder="Kode Kategori">

                        @error('namaKategori')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kodeKategori">Nama Kategori</label>
                        <input type="text" class="form-control @error('namaKategori') is-invalid @enderror" id="kodeKategori" name="namaKategori" placeholder="Nama Kategori">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ url('/kategori') }}" class="btn btn-secondary">Back</a> 
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@if ($errors->any)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    
@endif --}}