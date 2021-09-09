@extends('pemeriksaan_teamplate')
@section('title', 'Data Pemeriksaan | ImadePOM')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pemeriksaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/pemeriksaan">Pemeriksaan</a></li>
              <li class="breadcrumb-item active">Data Pemeriksaan</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <diV class="card">
          <div class="card-header">
            <h3 class="card-title">Data atas Nama : <b>{{$pemeriksaan->nama}}</b></h3>
          </div>
          <div class="card-body">
            <div>
              <label>Nama</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->nama}}
            </div>
            <div>
              <label>No Surat</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->no_surat}}
            </div>
            <div>
              <label>Alamat</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->alamat}}
            </div>
            <div>
              <label>Bulan</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->bulan}}
            </div>
            <div>
              <label>Kecamatan</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->kecamatan}}
            </div>
            <div>
              <label>Kabupaten</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->kabupaten}}
            </div>
            <div>
              <label>Temuan</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->temuan}}
            </div>
            <div>
              <label>Jumlah Temuan</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->jumlah_temuan}}
            </div>
            <div>
              <label>Nama Sarana</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->nama_sarana}}
            </div>
            <div>
              <label>Telepon</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->telepon}}
            </div>
            <div>
              <label>Pemilik Sarana</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->pemilik_sarana}}
            </div>
            <div>
              <label>Penanggung Jawab</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->penanggungjawab}}
            </div>
            <div>
              <label>Izin Sarana</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->izin_sarana}}
            </div>
            <div>
              <label>Jenis Sarana</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->jenis_sarana}}
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
              <a href="{{ route('pemeriksaan.edit' ,$pemeriksaan->id) }}" class="btn btn-primary">Edit</a>
              <a href="#" class="btn btn-success">Cetak</a>
              @csrf
              @method('DELETE')
              <a type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
              <a href="{{ route('pemeriksaan.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
          </div>
        </diV>
      </div>
    </div>
@endsection