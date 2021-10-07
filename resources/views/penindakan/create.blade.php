@extends('penindakan_teamplate')
@section('title', 'Tambah Data | ImadePOM')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Penindakan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/penindakan">Penindakan</a></li>
              <li class="breadcrumb-item active">Tambah Data Penindakan</li>
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
    
    <form action="{{ route('penindakan.store') }}" method="POST">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">No Surat Tugas</label>
                        <input type="text" name="no_surat_tugas" class="form-control" placeholder="No Surat Tugas">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNumber">No LHP</label>
                        <input type="string" name="no_lhp" class="form-control" id="exampleInputNumber" placeholder="No LHP">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Nama Sarana</label>
                        <input type="text" name="nama_sarana" class="form-control" id="exampleInputText" placeholder="Nama Sarana">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="exampleInputText" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Kabupaten</label>
                        <select type="enum" name="kabupaten" class="custom-select" id="exampleSelectBorder" >
                            <option>Buleleng</option>
                            <option>Jembrana</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhone">Telepon</label>
                        <input type="text" name="telepon" class="form-control" id="exampleInputPhone" placeholder="Telepon">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Pemilik / Pimpinan</label>
                        <input type="text" name="pemilik" class="form-control" id="exampleInputText" placeholder="Pemilik / Pimpinan">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Golongan Sarana</label>
                        <select type="text" name="golongan" class="custom-select" id="exampleSelectBorder" >
                            <option>Warung</option>
                            <option>Kios</option>
                            <option>Toko</option>
                            <option>Mini Market</option>
                            <option>Swalayan</option>
                            <option>Supermarket</option>
                            <option>Hypermarket</option>
                            <option>Toko Obat</option>
                            <option>Apotek</option>
                            <option>PBF</option>
                            <option>Rumah Sakit</option>
                            <option>Klinik</option>
                            <option>Salon</option>
                            <option>Rumah Kecantikan</option>
                            <option>Spa</option>
                            <option>Rumah</option>
                            <option>Gudang</option>
                            <option>Sales</option>
                            <option>Perorangan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Uraian Temuan</label>
                        <input type="text" name="uraian_temuan" class="form-control" id="exampleInputText" placeholder="Uraian Temuan">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Kategori Temuan</label>
                        <select type="text" name="kategori_temuan" class="custom-select" id="exampleSelectBorder" >
                            <option>Obat</option>
                            <option>Obat Tradisional</option>
                            <option>Kosmetik</option>
                            <option>Pangan</option>
                            <option>Campuran</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Kategori Temuan</label>
                        <select type="text" name="tindakan" class="custom-select" id="exampleSelectBorder" >
                            <option>Return</option>
                            <option>Pengamanan</option>
                            <option>Penyitaan</option>
                            <option>Pemusnahan</option>
                            <option>Saran Perbaikan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="exampleInputDate" placeholder="Tanggal">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">kesimpulan</label>
                        <select type="text" name="kesimpulan" class="custom-select" id="exampleSelectBorder" >
                            <option>Memenuhi Kebutuhan</option>
                            <option>Tidak Memenuhi Kebutuhan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Tindak Lanjut</label>
                        <select type="text" name="tindak_lanjut" class="custom-select" id="exampleSelectBorder" >
                            <option>Surat Peringatan</option>
                            <option>Projustitia</option>
                            <option>Administratif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Tempat Simpan</label>
                        <input type="text" name="tempat_simpan" class="form-control" id="exampleInputText" placeholder="Tempat Simpan">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Status</label>
                        <select type="enum" name="status" class="custom-select" id="exampleSelectBorder" >
                            <option>Tetap</option>
                            <option>Dikeluarkan</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('penindakan.index') }}" class="btn btn-default">Batal</a>
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