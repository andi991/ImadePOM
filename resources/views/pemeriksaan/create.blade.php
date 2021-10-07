@extends('pemeriksaan_teamplate')
@section('title', 'Tambah Data | ImadePOM')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Pemeriksaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/pemeriksaan">Pemeriksaan</a></li>
              <li class="breadcrumb-item active">Tambah Data Pemeriksaan</li>
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
    
    <form action="{{ route('pemeriksaan.store') }}" method="POST">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">Nama Petugas</label>
                        <input type="text" name="nama_petugas" class="form-control" placeholder="Nama Petugas">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Nama Sarana</label>
                        <input type="text" name="nama_sarana" class="form-control" placeholder="Nama Sarana">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Jenis Sarana</label>
                        <input type="text" name="jenis_sarana" class="form-control" id="exampleInputText" placeholder="Jenis Sarana">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Tanggal Periksa</label>
                        <input type="date" name="tanggal_periksa" class="form-control" id="exampleInputDate" placeholder="Tanggal Periksa">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Kategori Pemeriksaan
                        </label>
                        <select type="enum" name="kategori_pemeriksaan" class="custom-select" id="exampleSelectBorder" >
                            <option>Pengawasan Produksi</option>
                            <option>Pengawasan Distribusi</option>
                        </select>
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
                        <input type="text" name="kecamatan" class="form-control" id="exampleInputText" placeholder="Kecamatan">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Kategori Temuan</label>
                        <select type="enum" name="kategori_temuan" class="custom-select" id="exampleSelectBorder" >
                            <option>Memenuhi Ketentuan</option>
                            <option>Tidak Memenuhi Ketentuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Kategori Tindak Lanjut</label>
                        <select type="enum" name="kategori_tindak_lanjut" class="custom-select" id="exampleSelectBorder" >
                            <option>Pembinaan</option>
                            <option>Peringatan</option>
                            <option>Peringatan Keras</option>
                            <option>Hasil Pemeriksaan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNumber">No Surat Tindak Lanjut</label>
                        <input type="text" name="no_surat_tindak_lanjut" class="form-control" id="exampleInputNumber" placeholder="No Surat Tindak Lanjut">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Tanggal Surat Tindak Lanjut</label>
                        <input type="date" name="tanggal_surat_tindak_lanjut" class="form-control" id="exampleInputDate" placeholder="Tanggal Surat Tindak Lanjut">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Batas Waktu Tindak Lanjut</label>
                        <input type="date" name="batas_waktu" class="form-control" id="exampleInputDate" placeholder="Batas Waktu">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Status Laporan</label>
                        <select type="enum" name="status_laporan" class="custom-select" id="exampleSelectBorder" >
                            <option>Terlambat</option>
                            <option>Tidak Terlambat</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Tanggal Capa 1</label>
                        <input type="date" name="tanggal_capa1" class="form-control" id="exampleInputDate" placeholder="Tanggal Capa 1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Batas Tanggal Capa 1</label>
                        <input type="date" name="batas_tanggal_capa1" class="form-control" id="exampleInputDate" placeholder="Batas Tanggal Capa 1">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Status Capa 1</label>
                        <select type="enum" name="status_capa1" class="custom-select" id="exampleSelectBorder" >
                            <option>Tepat Waktu</option>
                            <option>Terlambat</option>
                            <option>Belum Dikirim</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Tanggal Open Capa 1</label>
                        <input type="date" name="tanggal_open_capa1" class="form-control" id="exampleInputDate" placeholder="Tanggal Open Capa 1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Tanggal Close Capa 1</label>
                        <input type="date" name="tanggal_close_capa1" class="form-control" id="exampleInputDate" placeholder="Tanggal Close Capa 1">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Evaluasi Capa 1</label>
                        <select type="enum" name="evaluasi_capa1" class="custom-select" id="exampleSelectBorder" >
                            <option>Open</option>
                            <option>Close</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Tanggal Open Capa 2</label>
                        <input type="date" name="tanggal_open_capa2" class="form-control" id="exampleInputDate" placeholder="Tanggal Open Capa 2">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Tanggal Close Capa 2</label>
                        <input type="date" name="tanggal_close_capa2" class="form-control" id="exampleInputDate" placeholder="Tanggal Close Capa 2">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Keterangan Feedback Lintas Sektor</label>
                        <input type="text" name="keterangan_feedback_lintas_sektor" class="form-control" id="exampleInputText" placeholder="Keterangan Feedback Lintas Sektor">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">SIPT</label>
                        <input type="text" name="sipt" class="form-control" id="exampleInputText" placeholder="SIPT">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">SPV</label>
                        <input type="text" name="spv" class="form-control" id="exampleInputText" placeholder="SPV">
                    </div>
                    <div class="form-group">
                        <label for="exampleImputText">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="exampleInputText" placeholder="Keterangan">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Status Pemeriksaan</label>
                        <select type="enum" name="status" class="custom-select" id="exampleSelectBorder" >
                            <option>Belum Diperiksa</option>
                            <option>Akan Diperiksa</option>
                            <option>Sudah Diperiksa</option>
                            
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('pemeriksaan.index') }}" class="btn btn-default">Batal</a>
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
