@extends('pemeriksaan_teamplate')
@section('title', 'Edit Data | ImadePOM')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Pemeriksaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/pemeriksaan">Pemeriksaan</a></li>
              <li class="breadcrumb-item active">Edit Data Pemeriksaan</li>
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
    
    <form action="{{ route('pemeriksaan.update' ,$pemeriksaan->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">Nama</label>
                        <input type="text" name="nama" value="{{ $pemeriksaan->nama }}" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNumber">No Surat</label>
                        <input type="string" name="no_surat" value="{{ $pemeriksaan->no_surat }}" class="form-control" id="exampleInputNumber" placeholder="No Surat">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{ $pemeriksaan->alamat }}" id="exampleInputText" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Bulan</label>
                        <input type="date" name="bulan" class="form-control" value="{{ $pemeriksaan->bulan }}" id="exampleInputDate" placeholder="Bulan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Kecamatan</label>
                        <input type="text" name="kecamatan" class="form-control" value="{{ $pemeriksaan->kecamatan }}" id="exampleInputText" placeholder="Kecamatan">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Kabupaten</label>
                        <select type="enum" name="kabupaten" class="custom-select" value="{{ $pemeriksaan->kabupaten }}" id="exampleSelectBorder" >
                            <option>Buleleng</option>
                            <option>Jembrana</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Temuan</label>
                        <input type="text" name="temuan" class="form-control" value="{{ $pemeriksaan->temuan }}" id="exampleInputText" placeholder="Temuan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNumber">Jumlah Temuan</label>
                        <input type="string" name="jumlah_temuan" class="form-control" value="{{ $pemeriksaan->jumlah_temuan }}" id="exampleInputNumber" placeholder="Jumlah Temuan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Nama Sarana</label>
                        <input type="text" name="nama_sarana" class="form-control" value="{{ $pemeriksaan->nama_sarana }}" id="exampleInputText" placeholder="Nama Sarana">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhone">Telepon</label>
                        <input type="string" name="telepon" class="form-control" value="{{ $pemeriksaan->telepon }}" id="exampleInputPhone" placeholder="Telepon">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Pemilik Sarana</label>
                        <input type="text" name="pemilik_sarana" class="form-control" value="{{ $pemeriksaan->pemilik_sarana }}" id="exampleInputText" placeholder="Pemilik Sarana">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Penanggungjawab</label>
                        <input type="text" name="penanggungjawab" class="form-control" value="{{ $pemeriksaan->penanggungjawab }}" id="exampleInputText" placeholder="Penanggungjawab">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Izin Sarana</label>
                        <input type="text" name="izin_sarana" class="form-control" value="{{ $pemeriksaan->izin_sarana }}" id="exampleInputText" placeholder="Izin Sarana">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Jenis Sarana</label>
                        <input type="text" name="jenis_sarana" class="form-control" value="{{ $pemeriksaan->jenis_sarana }}" id="exampleInputText" placeholder="Jenis Sarana">
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
@endsection