@extends('pemeriksaan_teamplate')
@section('title', 'Data Pemeriksaan | ImadePOM')




@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Semua Data Pembinaan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Pemeriksaan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div>
        <div class="container-fluid">
            <div class="card" class="row-100">
                <div class="card-header">
                    <h3 class="card-title">Seluruh Data Pembinaan</h3>
                    <div class="card-tools">
                      <a href="/cetak-pembinaan" target="_blank" class="btn btn-secondary mb-2 btn-sm" > <i class="fa fa-print" aria-hidden="true"></i> Cetak</a>
                      <a href="/pemeriksaan" class="btn btn-danger mb-2 btn-sm" > <i class="far fa-arrow-alt-circle-left"></i> Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                <table class="table table-bordered table-hover table-striped" id="example1">
                  <thead data-widget="expandable-table" aria-expanded="false">
                      <tr data-widget="expandable-table" aria-expanded="false" id="expandable-table-header-row">
                      <th  class="text-center">Nama Petugas</th>
                      <th  class="text-center">Nama Sarana</th>
                      <th class="text-center">Jenis Sarana</th>
                      <th class="text-center">Tanggal Periksa</th>
                      <th class="text-center">Kategori Pemeriksaan</th>
                      <th class="text-center">Kabupaten</th>
                      <th class="text-center">Kecamatan</th>
                      <th class="text-center">Kategori Temuan</th>
                      <th class="text-center">Kategori Tindak Lanjut</th>
                      <th class="text-center">No Surat Tindak Lanjut</th>
                      <th class="text-center">Tanggal Surat Tindak Lanjut</th>
                      <th class="text-center">Batas Waktu Tindak Lanjut</th>
                      <th class="text-center">Status Laporan</th>
                      <th class="text-center">Tanggal Capa 1</th>
                      <th class="text-center">Batas Tanggal Capa 1</th>
                      <th class="text-center">Status Capa 1</th>
                      <th class="text-center">Tanggal Open Capa 1</th>
                      <th class="text-center">Tanggal Close Capa 1</th>
                      <th class="text-center">Evaluasi Capa 1</th>
                      <th class="text-center">Tanggal Open Capa 2</th>
                      <th class="text-center">Tanggal Close Capa 2</th>
                      <th class="text-center">Keterangan Feedback Lintas Sektor</th>
                      <th class="text-center">SIPT</th>
                      <th class="text-center">SPV</th>
                      <th class="text-center">Keterangan</th>
                      <th class="text-center">Status Pemeriksaan</th>
                      <th class="text-center">Aksi</th>
                  </tr>
                  </thead>
                  
                  <tbody>
                  @foreach ($pemeriksaans as $pemeriksaan)
                  <tr>
                    <p>
                      <td>{{ $pemeriksaan->nama_petugas }}</td>
                      <td>{{ $pemeriksaan->nama_sarana }}</td>
                      <td>{{ $pemeriksaan->jenis_sarana }}</td>
                      <td>{{ $pemeriksaan->tanggal_periksa }}</td>
                      <td>{{ $pemeriksaan->kategori_pemeriksaan }}</td>
                      <td>{{ $pemeriksaan->kabupaten }}</td>
                      <td>{{ $pemeriksaan->kecamatan }}</td>
                      <td>{{ $pemeriksaan->kategori_temuan }}</td>
                      <td>{{ $pemeriksaan->kategori_tindak_lanjut }}</td>
                      <td>{{ $pemeriksaan->no_surat_tindak_lanjut }}</td>
                      <td>{{ $pemeriksaan->tanggal_surat_tindak_lanjut }}</td>
                      <td>{{ $pemeriksaan->batas_waktu }}</td>
                      <td>{{ $pemeriksaan->status_laporan }}</td>
                      <td>{{ $pemeriksaan->tanggal_capa1 }}</td>
                      <td>{{ $pemeriksaan->batas_tanggal_capa1 }}</td>
                      <td>{{ $pemeriksaan->status_capa1 }}</td>
                      <td>{{ $pemeriksaan->tanggal_open_capa1 }}</td>
                      <td>{{ $pemeriksaan->tanggal_close_capa1 }}</td>
                      <td>{{ $pemeriksaan->evaluasi_capa1 }}</td>
                      <td>{{ $pemeriksaan->tanggal_open_capa2 }}</td>
                      <td>{{ $pemeriksaan->tanggal_close_capa2 }}</td>
                      <td>{{ $pemeriksaan->keterangan_feedback_lintas_sektor }}</td>
                      <td>{{ $pemeriksaan->sipt }}</td>
                      <td>{{ $pemeriksaan->spv }}</td>
                      <td>{{ $pemeriksaan->keterangan }}</td>
                      <td>{{ $pemeriksaan->status }}</td>
                      <td class="text-center" style="width: 30;">
                        <form action="{{ route('pemeriksaan.destroy',$pemeriksaan->id) }}" method="POST">
                            <a class="btn btn-info btn-sm" href="{{ route('pemeriksaan.show',$pemeriksaan->id) }}">Lihat <i class="fas fa-eye"></i></a>
                            <a class="btn btn-primary btn-sm" href="{{ route('pemeriksaan.edit',$pemeriksaan->id) }}">Edit <i class="fas fa-edit"></i></a>
                            @if (auth()->user()->role == "admin")
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus <i class="fas fa-trash"></i></button>
                            @endif
                        </form>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>

                </div>

            </div>
        </div>


    </div>
  </html>

  @section('footer')
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 1.0.0 Alpha
  </div>
  <strong>Copyright &copy; 2021 ImadePOM</strong> All rights reserved.
  @stop
@endsection

