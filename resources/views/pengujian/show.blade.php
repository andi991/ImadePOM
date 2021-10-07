@extends('pengujian_teamplate')
@section('title', 'Data Pengujian | ImadePOM')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Peengujian</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/pengujian">Pengujian</a></li>
              <li class="breadcrumb-item active">Data Pengujian</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <diV class="card">
          <div class="card-header">
            <h3 class="card-title">Data atas Nama : <b>Data Pengujian</b></h3>
          </div>
          <div class="card-body">
            <div>
              <label>No Surat Tugas</label>
            </div>
            <div class="table-bordered">
              {{ $pengujian->no_surat_tugas }}
            </div>
            <div>
              <label>Nama Petugas</label>
            </div>
            <div class="table-bordered">
              {{ $pengujian->nama_petugas }}
            </div>
            <div>
              <label>Izin Sarana</label>
            </div>
            <div class="table-bordered">
              {{$pengujian->izin_sarana}}
            </div>
            <div>
              <label>Jenis Sarana</label>
            </div>
            <div class="table-bordered">
              {{$pengujian->jenis_sarana}}
            </div>
            <div>
              <label>Deputi</label>
            </div>
            <div class="table-bordered">
              {{$pengujian->deputi}}
            </div>
            <div>
              <label>Kabupaten</label>
            </div>
            <div class="table-bordered">
              {{$pengujian->kabupaten}}
            </div>
            <div>
              <label>Kecamatan</label>
            </div>
            <div class="table-bordered">
              {{$pengujian->kecamatan}}
            </div>
            <div>
              <label>Temuan</label>
            </div>
            <div class="table-bordered">
              {{$pengujian->temuan}}
            </div>
            <div>
              <label>Jumlah Temuan</label>
            </div>
            <div class="table-bordered">
              {{$pengujian->jumlah_temuan}}
            </div>
            <div>
              <label>Keterangan Temuan</label>
            </div>
            <div class="table-bordered">
              {{$pengujian->keterangan_temuan}}
            </div>
            <div>
              <label>MK/TMK</label>
            </div>
            <div class="table-bordered">
              {{$pengujian->mk_tmk}}
            </div>
            <div>
              <label>Status</label>
            </div>
            <div class="table-bordered">
              {{$pengujian->status}}
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
              <a href="{{ route('pengujian.edit' ,$pengujian->id) }}" class="btn btn-primary">Edit</a>
              @csrf
              @method('DELETE')
              <a type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
              <a href="{{ route('pengujian.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
          </div>
        </diV>
      </div>
    </div>

    @section('footer')
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 1.0.0 Alpha
        </div>
        <strong>Copyright &copy; 2021 ImadePOM</strong> All rights reserved.
        @stop
@endsection