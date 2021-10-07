@extends('pengujian_teamplate')
@section('title', 'Edit Data | ImadePOM')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Pengujian</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/pengujian">Pengujian</a></li>
              <li class="breadcrumb-item active">Edit Data Pengujian</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form action="{{ route('pengujian.update' ,$pengujian->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <div class="form-group">
                        <label for="exampleInputName">No Surat Tugas</label>
                        <input type="text" name="no_surat_tugas" class="form-control" value="{{ $pengujian->no_surat_tugas }}" placeholder="No Surat Tugas">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Nama Petugas</label>
                        <input type="text" name="nama_petugas" class="form-control" value="{{ $pengujian->nama_petugas }}" placeholder="Nama Petugas">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Izin Sarana</label>
                        <input type="text" name="izin_sarana" class="form-control" id="exampleInputText"  value="{{ $pengujian->izin_sarana }}" placeholder="Izin Sarana">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Jenis Sarana</label>
                        <select type="enum" name="jenis_sarana" class="custom-select" id="exampleSelectBorder" value="{{ $pengujian->jenis_sarana }}" >
                            <option>Produksi</option>
                            <option>Distribusi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Deputi</label>
                        <input type="text" name="deputi" class="form-control" value="{{ $pengujian->deputi }}" id="exampleInputText" placeholder="Deputi">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Kabupaten</label>
                        <select type="enum" name="kabupaten" class="custom-select" id="exampleSelectBorder" >
                            <option>Buleleng</option>
                            <option>Jembrana</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Kecamatan</label>
                        <input type="text" name="kecamatan" class="form-control" value="{{ $pengujian->kecamatan }}" id="exampleInputText" placeholder="Kecamatan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Temuan</label>
                        <input type="text" name="temuan" class="form-control" value="{{ $pengujian->temuan }}" id="exampleInputText" placeholder="Temuan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNumber">Jumlah Temuan</label>
                        <input type="text" name="jumlah_temuan" class="form-control" value="{{ $pengujian->jumlah_temuan }}" id="exampleInputNumber" placeholder="Jumlah Temuan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Keterangan Temuan</label>
                        <input type="text" name="keterangan_temuan" class="form-control" id="exampleInputText" value="{{ $pengujian->keterangan_temuan }}" placeholder="Keterangan Temuan">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">MK/TMK</label>
                        <select type="enum" name="mk_tmk" class="custom-select" value="{{ $pengujian->mk_tmk }}" id="exampleSelectBorder" >
                            <option>Memenuhi Ketentuan</option>
                            <option>Tidak Memenuhi Ketentuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Status Pengujian</label>
                        <select type="enum" name="status" class="custom-select" id="exampleSelectBorder" value="{{ $pengujian->status }}" >
                            <option>Belum Diuji</option>
                            <option>Akan Diuji</option>
                            <option>Sudah Diuji</option>
                            
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('pengujian.index') }}" class="btn btn-default">
                        Batal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
@section('footer')
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 1.0.0 Alpha
        </div>
        <strong>Copyright &copy; 2021 ImadePOM</strong> All rights reserved.
        @stop
@endsection