@extends('penindakan_teamplate')
@section('title', 'Tambah Data | ImadePOM')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Temuan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/penindakan">Temuan</a></li>
              <li class="breadcrumb-item active">Edit Data Temuan</li>
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
    
    <form action="{{ route('temuan.update' ,$temuan->id) }}" method="POST">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">Nama Produk</label>
                        <input type="string" name="nama_produk" class="form-control" placeholder="Nama Produk" value="{{ $temuan->nama_produk }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Bentuk</label>
                        <select type="text" name="bentuk" class="custom-select" id="exampleSelectBorder" >
                            <option>{{ $temuan->bentuk }}</option>
                            <option>Padat</option>
                            <option>Cair</option>
                            <option>Krim</option>
                            <option>Bubuk</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Registrasi</label>
                        <input type="text" name="registrasi" class="form-control" id="exampleInputText" placeholder="Registrasi" value="{{ $temuan->registrasi }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Batch</label>
                        <input type="text" name="batch" class="form-control" id="exampleInputText" placeholder="Batch" value="{{ $temuan->batch }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Expired Date</label>
                        <input type="date" name="exp_date" class="form-control" id="exampleInputDate" placeholder="Tanggal" value="{{ $temuan->exp_date }}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Kategori</label>
                        <select type="text" name="kategori" class="custom-select" id="exampleSelectBorder" >
                            <option>{{ $temuan->kategori }}</option>
                            <option>Obat</option>
                            <option>Obat Tradisional</option>
                            <option>Kosmetik</option>
                            <option>Pangan</option>
                            <option>Suplemen</option>
                            <option>Kuasi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Produsen</label>
                        <input type="text" name="produsen" class="form-control" id="exampleInputText" placeholder="Produsen" value="{{ $temuan->produsen }}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Satuan</label>
                        <input type="text" name="satuan" class="form-control" id="exampleInputText" placeholder="Satuan" value="{{ $temuan->satuan }}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Jumlah</label>
                        <input type="text" name="jumlah" class="form-control" id="exampleInputText" placeholder="Uraian Temuan" value="{{ $temuan->jumlah }}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Nilai Satuan</label>
                        <input type="text" name="nilai_satuan" class="form-control" id="exampleInputText" placeholder="Kategori Temuan" value="{{ $temuan->nilai_satuan }}" >
                    </div>
                    <!--satuan dikali nilai satuan-->
                    <div class="form-group">
                        <label for="exampleInputText">Total Nilai Satuan</label>
                        <input type="text" name="total_nilai_satuan" class="form-control" id="exampleInputText" placeholder="Tindakan" value="{{ $temuan->total_nilai_satuan }}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Justifikasi</label>
                        <select type="text" name="justifikasi" class="custom-select" id="exampleSelectBorder" >
                            <option>{{ $temuan->justifikasi }}</option>
                            <option>Palsu</option>
                            <option>Sub Standar</option>
                            <option>Tanpa Ijin Edar</option>
                            <option>Mengandung Bahan Berbahaya</option>
                            <option>Mengandung Bahan Kimia Obat</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('temuan.index') }}" class="btn btn-default">Batal</a>
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