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
    @method('PUT')
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <div class="form-group">
                        <label for="exampleInputName">Nama Petugas</label>
                        <input type="text" name="nama_petugas" class="form-control" value="{{ $pemeriksaan->nama_petugas }}" placeholder="Nama Petugas">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Nama Sarana</label>
                        <input type="text" name="nama_sarana" class="form-control" value="{{ $pemeriksaan->nama_sarana }}" placeholder="Nama Sarana">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Jenis Sarana</label>
                        <input type="text" name="jenis_sarana" class="form-control" id="exampleInputText"  value="{{ $pemeriksaan->jenis_sarana }}" placeholder="Jenis Sarana">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Tanggal Periksa</label>
                        <input type="date" name="tanggal_periksa" class="form-control" id="exampleInputDate"  value="{{ $pemeriksaan->tanggal_periksa }}"placeholder="Tanggal Periksa">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Kategori Pemeriksaan
                        </label>
                        <select type="enum" name="kategori_pemeriksaan" class="custom-select" value="{{ $pemeriksaan->kategori_pemeriksaan }}" id="exampleSelectBorder" >
                            <option>Pengawasan Produksi</option>
                            <option>Pengawasan Distribusi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Kabupaten</label>
                        <select type="enum" name="kabupaten" class="custom-select" value="{{ $pemeriksaan->kabupaten }}" id="exampleSelectBorder" >
                            <option>Buleleng</option>
                            <option>Jembrana</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Kecamatan</label>
                        <input type="text" name="kecamatan" class="form-control" id="exampleInputText" value="{{ $pemeriksaan->kecamatan }}" placeholder="Kecamatan">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Kategori Temuan</label>
                        <select type="enum" name="kategori_temuan" class="custom-select" value="{{ $pemeriksaan->kategori_temuan }}" id="exampleSelectBorder" >
                            <option>Memenuhi Ketentuan</option>
                            <option>Tidak Memenuhi Ketentuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Kategori Tindak Lanjut</label>
                        <select type="enum" name="kategori_tindak_lanjut" class="custom-select" value="{{ $pemeriksaan->kategori_tindak_lanjut }}" id="exampleSelectBorder" >
                            <option>Pembinaan</option>
                            <option>Peringatan</option>
                            <option>Peringatan Keras</option>
                            <option>Hasil Pemeriksaan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNumber">No Surat Tindak Lanjut</label>
                        <input type="text" name="no_surat_tindak_lanjut" class="form-control" id="exampleInputNumber" value="{{ $pemeriksaan->no_surat_tindak_lanjut }}" placeholder="No Surat Tindak Lanjut">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Tanggal Surat Tindak Lanjut</label>
                        <input type="date" name="tanggal_surat_tindak_lanjut" class="form-control" id="exampleInputDate" value="{{ $pemeriksaan->tanggal_surat_tindak_lanjut }}" placeholder="Tanggal Surat Tindak Lanjut">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Batas Waktu</label>
                        <input type="date" name="batas_waktu" class="form-control" id="exampleInputDate" value="{{ $pemeriksaan->batas_waktu }}" placeholder="Batas Waktu">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Status Laporan</label>
                        <select type="enum" name="status_laporan" class="custom-select" value="{{ $pemeriksaan->status_laporan }}" id="exampleSelectBorder" >
                            <option>Terlambat</option>
                            <option>Tidak Terlambat</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Tanggal Capa 1</label>
                        <input type="date" name="tanggal_capa1" class="form-control" id="exampleInputDate" value="{{ $pemeriksaan->tanggal_capa1 }}" placeholder="Tanggal Capa 1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Batas Tanggal Capa 1</label>
                        <input type="date" name="batas_tanggal_capa1" class="form-control" id="exampleInputDate" value="{{ $pemeriksaan->batas_tanggal_capa1 }}" placeholder="Batas Tanggal Capa 1">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Status Capa 1</label>
                        <select type="enum" name="status_capa1" class="custom-select" value="{{ $pemeriksaan->status_capa1 }}" id="exampleSelectBorder" >
                            <option>Tepat Waktu</option>
                            <option>Terlambat</option>
                            <option>Belum Dikirim</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Tanggal Open Capa 1</label>
                        <input type="date" name="tanggal_open_capa1" class="form-control" id="exampleInputDate" value="{{ $pemeriksaan->tanggal_open_capa1 }}" placeholder="Tanggal Open Capa 1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Tanggal Close Capa 1</label>
                        <input type="date" name="tanggal_close_capa1" class="form-control" id="exampleInputDate" value="{{ $pemeriksaan->tanggal_close_capa1 }}" placeholder="Tanggal Close Capa 1">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Evaluasi Capa 1</label>
                        <select type="enum" name="evaluasi_capa1" class="custom-select" value="{{ $pemeriksaan->evaluasi_capa1 }}" id="exampleSelectBorder" >
                            <option>Open</option>
                            <option>Close</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Tanggal Open Capa 2</label>
                        <input type="date" name="tanggal_open_capa2" class="form-control" id="exampleInputDate" value="{{ $pemeriksaan->tanggal_open_capa2 }}" placeholder="Tanggal Open Capa 2">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Tanggal Close Capa 2</label>
                        <input type="date" name="tanggal_close_capa2" class="form-control" id="exampleInputDate" value="{{ $pemeriksaan->tanggal_close_capa2 }}" placeholder="Tanggal Close Capa 2">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Keterangan Feedback Lintas Sektor</label>
                        <input type="text" name="keterangan_feedback_lintas_sektor" class="form-control" id="exampleInputText" value="{{ $pemeriksaan->keterangan_feedback_lintas_sektor }}" placeholder="Keterangan Feedback Lintas Sektor">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">SIPT</label>
                        <input type="text" name="sipt" class="form-control" id="exampleInputText" value="{{ $pemeriksaan->sipt }}" placeholder="SIPT">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">SPV</label>
                        <input type="text" name="spv" class="form-control" id="exampleInputText" value="{{ $pemeriksaan->spv }}" placeholder="SPV">
                    </div>
                    <div class="form-group">
                        <label for="exampleImputText">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="exampleInputText" value="{{ $pemeriksaan->keterangan }}" placeholder="Keterangan">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Status Pemeriksaan</label>
                        <select type="enum" name="status" class="custom-select" id="exampleSelectBorder" value="{{ $pemeriksaan->status }}" >
                            <option>Belum Diperiksa</option>
                            <option>Akan Diperiksa</option>
                            <option>Sudah Diperiksa</option>
                            
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('pemeriksaan.index') }}" class="btn btn-default">
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