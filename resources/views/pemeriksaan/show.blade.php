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
            <h3 class="card-title">Data atas Nama : <b>{{$pemeriksaan->nama_sarana}}</b></h3>
          </div>
          <div class="card-body">
            <div>
              <label>Nama Petugas</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->nama_petugas}}
            </div>
            <div>
              <label>Nama Sarana</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->nama_sarana}}
            </div>
            <div>
              <label>Jenis Sarana</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->jenis_sarana}}
            </div>
            <div>
              <label>Tanggal Periksa</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->tanggal_periksa}}
            </div>
            <div>
              <label>Kategori Pemeriksaan</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->kategori_pemeriksaan}}
            </div>
            <div>
              <label>Kabupaten</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->kabupaten}}
            </div>
            <div>
              <label>Kecamatan</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->kecamatan}}
            </div>
            <div>
              <label>Kategori Temuan</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->kategori_temuan}}
            </div>
            <div>
              <label>Ketegori Tindak Lanjut</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->kategori_tindak_lanjut}}
            </div>
            <div>
              <label>No Surat Tindak Lanjut</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->no_surat_tindak_lanjut}}
            </div>
            <div>
              <label>Batas Waktu</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->batas_waktu}}
            </div>
            <div>
              <label>Status Laporan</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->status_laporan}}
            </div>
            <div>
              <label>Tanggal Capa 1</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->tanggal_capa1}}
            </div>
            <div>
              <label>Batas Tanggal Capa 1</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->batas_tanggal_capa1}}
            </div>
            <div>
              <label>Status Capa 1</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->status_capa1}}
            </div>
            <div>
              <label>Tanggal Open Capa 1</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->tanggal_open_capa1}}
            </div>
            <div>
              <label>Tanggal Close Capa 1</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->tanggal_close_capa1}}
            </div>
            <div>
              <label>Tanggal Open Capa 2</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->tanggal_open_capa2}}
            </div>
            <div>
              <label>Tanggal Close Capa 2</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->tanggal_close_capa2}}
            </div>
            <div>
              <label>Keterangan Feedback Lintas Sektor</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->keterangan_feedback_lintas_sektor}}
            </div>
            <div>
              <label>SIPT</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->sipt}}
            </div>
            <div>
              <label>SPV</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->spv}}
            </div>
            <div>
              <label>Keterangan</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->keterangan}}
            </div>
            <div>
              <label>Status</label>
            </div>
            <div class="table-bordered">
              {{$pemeriksaan->status}}
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
              <a href="{{ route('pemeriksaan.edit' ,$pemeriksaan->id) }}" class="btn btn-primary">Edit</a>
              @csrf
              @method('DELETE')
              <a type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
              <a href="{{ route('pemeriksaan.index') }}" class="btn btn-secondary">Kembali</a>
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