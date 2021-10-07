@extends('penindakan_teamplate')
@section('title', 'Data penindakan | ImadePOM')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Semua Data Penindakan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Peenindakan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div>
        <div class="container-fluid">
            <div class="card" class="row-100">
                <div class="card-header">
                    <h3 class="card-title">Seluruh Data Penindakan</h3>
                </div>
                <div class="card-body">
                <table class="table table-bordered table-hover table-striped" id="example2">
                  <thead>
                  <tr>
                     <th  class="text-center">No Surat Tugas</th>
                      <th  class="text-center">No LHP</th>
                      <th class="text-center">Nama Sarana</th>
                      <th class="text-center">Alamat</th>
                      <th class="text-center">Kabupaten</th>
                      <th class="text-center">Telepon</th>
                      <th class="text-center">Pemilik / Pimpinan</th>
                      <th class="text-center">Golongan</th>
                      <th class="text-center">Uraian Temuan</th>
                      <th class="text-center">Kategori Temuan</th>
                      <th class="text-center">Tindakan</th>
                      <th class="text-center">Tanggal</th>
                      <th class="text-center">Kesimpulan</th>
                      <th class="text-center">Tindak Lanjut</th>
                      <th class="text-center">Tempat Simpan</th>
                      <th class="text-center">Status</th>
                      <td class="text-center">Aksi</td>

                  </tr>
                  </thead>
                  
                  <tbody>
                  @foreach ($penindakans as $penindakan)
                  <tr>
                    <td>{{ $penindakan->no_surat_tugas }}</td>
                    <td>{{ $penindakan->no_lhp }}</td>
                    <td>{{ $penindakan->nama_sarana }}</td>
                    <td>{{ $penindakan->alamat }}</td>
                    <td>{{ $penindakan->kabupaten }}</td>
                    <td>{{ $penindakan->telepon }}</td>
                    <td>{{ $penindakan->pemilik }}</td>
                    <td>{{ $penindakan->golongan }}</td>
                    <td>{{ $penindakan->uraian_temuan }}</td>
                    <td>{{ $penindakan->kategori_temuan }}</td>
                    <td>{{ $penindakan->tindakan }}</td>
                    <td>{{ $penindakan->tanggal }}</td>
                    <td>{{ $penindakan->kesimpulan }}</td>
                    <td>{{ $penindakan->tindak_lanjut }}</td>
                    <td>{{ $penindakan->tempat_simpan }}</td>
                    <td>{{ $penindakan->status }}</td>
                    <td class="text-center" style="width: 30;">
                      <form action="{{ route('penindakan.destroy',$penindakan->id) }}" method="POST">
                          <a class="btn btn-info btn-sm" href="{{ route('penindakan.show',$penindakan->id) }}"><i class="fas fa-eye"></i></a>
                          <a class="btn btn-primary btn-sm" href="{{ route('penindakan.edit',$penindakan->id) }}"><i class="fas fa-edit"></i></a>
                          @if (auth()->user()->role == "admin")
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></button>
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