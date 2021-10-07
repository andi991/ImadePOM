@extends('pengujian_teamplate')
@section('title', 'Data Pengujian | ImadePOM')




@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Semua Data Pengujian</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Pengujian</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div>
        <div class="container-fluid">
            <div class="card" class="row-100">
                <div class="card-header">
                    <h3 class="card-title">Seluruh Data Pengujian</h3>
                </div>
                <div class="card-body">
                <table class="table table-bordered table-hover table-striped" id="example2">
                  <thead>
                  <tr>
                     <th  class="text-center">No Surat Tugas</th>
                      <th  class="text-center">Nama Petugas</th>
                      <th class="text-center">Izin Sarana</th>
                      <th class="text-center">Jenis Sarana</th>
                      <th class="text-center">Deputi</th>
                      <th class="text-center">Kabupaten</th>
                      <th class="text-center">Kecamatan</th>
                      <th class="text-center">Temuan</th>
                      <th class="text-center">Jumlah Temuan</th>
                      <th class="text-center">Keterangan Temuan</th>
                      <th class="text-center">MK/TMK</th>
                      <th class="text-center">Status Pengujian</th>
                      <th class="text-center">Aksi</th>
                  </tr>
                  </thead>
                  
                  <tbody>
                  @foreach ($pengujians as $pengujian)
                  <tr>
                    <td>{{ $pengujian->no_surat_tugas }}</td>
                    <td>{{ $pengujian->nama_petugas }}</td>
                    <td>{{ $pengujian->izin_sarana }}</td>
                    <td>{{ $pengujian->jenis_sarana }}</td>
                    <td>{{ $pengujian->deputi }}</td>
                    <td>{{ $pengujian->kabupaten }}</td>
                    <td>{{ $pengujian->kecamatan }}</td>
                    <td>{{ $pengujian->temuan }}</td>
                    <td>{{ $pengujian->jumlah_temuan }}</td>
                    <td>{{ $pengujian->keterangan_temuan }}</td>
                    <td>{{ $pengujian->mk_tmk }}</td>
                    <td>{{ $pengujian->status }}</td>
                    <td class="text-center" style="width: 30;">
                      <form action="{{ route('pengujian.destroy',$pengujian->id) }}" method="POST">
                          <a class="btn btn-info btn-sm" href="{{ route('pengujian.show',$pengujian->id) }}"><i class="fas fa-eye"></i></a>
                          <a class="btn btn-primary btn-sm" href="{{ route('pengujian.edit',$pengujian->id) }}"><i class="fas fa-edit"></i></a>
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

