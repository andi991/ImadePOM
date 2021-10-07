@extends('penindakan_teamplate')
@section('title', 'Edit Data | ImadePOM')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Penindakan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/penindakan">Penindakan</a></li>
              <li class="breadcrumb-item active">Edit Data Penindakan</li>
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
    
    <form action="{{ route('penindakan.update' ,$penindakan->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">No Surat Tugas</label>
                        <input type="string" name="no_surat_tugas" class="form-control" placeholder="No Surat Tugas" value="{{ $penindakan->no_surat_tugas }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNumber">No LHP</label>
                        <input type="string" name="no_lhp" class="form-control" id="exampleInputNumber" placeholder="No LHP" value="{{ $penindakan->no_lhp }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Nama Sarana</label>
                        <input type="text" name="nama_sarana" class="form-control" id="exampleInputText" placeholder="Nama Sarana" value="{{ $penindakan->nama_sarana }}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="exampleInputText" placeholder="Alamat"  value="{{ $penindakan->alamat }}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Kabupaten</label>
                        <select type="enum" name="kabupaten" class="custom-select" value="{{ $penindakan->kabupaten }}" id="exampleSelectBorder" >
                            <option>Buleleng</option>
                            <option>Jembrana</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhone">Telepon</label>
                        <input type="text" name="telepon" class="form-control" id="exampleInputPhone" placeholder="Telepon"  value="{{ $penindakan->telepon }}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Pemilik / Pimpinan</label>
                        <input type="text" name="pemilik" class="form-control" id="exampleInputText" placeholder="Pemilik / Pimpinan" value="{{ $penindakan->pemilik }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Golongan</label>
                        <input type="text" name="golongan" class="form-control" id="exampleInputText" placeholder="Golongan" value="{{ $penindakan->golongan }}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Uraian Temuan</label>
                        <input type="text" name="uraian_temuan" class="form-control" id="exampleInputText" placeholder="Uraian Temuan" value="{{ $penindakan->uraian_temuan }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Kategori Temuan</label>
                        <input type="text" name="kategori_temuan" class="form-control" id="exampleInputText" placeholder="Kategori Temuan" value="{{ $penindakan->kategori_temuan }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Tindakan</label>
                        <input type="text" name="tindakan" class="form-control" id="exampleInputText" placeholder="Tindakan" value="{{ $penindakan->tindakan }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="exampleInputDate" placeholder="Tanggal" value="{{ $penindakan->tanggal }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Kesimpulan</label>
                        <input type="text" name="kesimpulan" class="form-control" id="exampleInputText" placeholder="Kesimpulan" value="{{ $penindakan->kesimpulan }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Tindak Lanjut</label>
                        <input type="text" name="tindak_lanjut" class="form-control" id="exampleInputText" placeholder="Tindak Lanjut" value="{{ $penindakan->tindak_lanjut }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Tempat Simpan</label>
                        <input type="text" name="tempat_simpan" class="form-control" id="exampleInputText" placeholder="Tempat Simpan" value="{{ $penindakan->tindak_lanjut }}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Status Penindakan</label>
                        <select type="enum" name="status" class="custom-select" id="exampleSelectBorder" >
                            <option>{{ $penindakan->status }}</option>
                            <option>Tetap</option>
                            <option>Dikeluarkan</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{route('penindakan.index')}}" class="btn btn-default">
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