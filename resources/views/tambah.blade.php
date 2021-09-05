@extends('adminlte::page')
@section('title', 'Imade POM')


@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pemeriksaan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <form action="" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">No Surat Tugas</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Petugas</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Tanggal Surat</label>
                        <input type="date" class="form-control @error('date') is-invalid @enderror" id="exampleInputDate" placeholder="" name="surat" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Tanggal Pemeriksaan</label>
                        <input type="date" class="form-control @error('date') is-invalid @enderror" id="exampleInputDate" placeholder="" name="tanggal pemeriksa" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Nama Sarana</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Alamat</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Telepon Sarana</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Pemilik Sarana</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Penanggung Jawab</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Izin Sarana</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Jenis Sarana</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="" name="name" value="">
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop