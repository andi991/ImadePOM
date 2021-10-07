@extends('pengujian_teamplate')
@section('title', 'Pengujian| ImadePOM')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pengujian</h1>
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
    <!-- /.content-header -->
    <div class="content">
    </div>
    <!--Kotak Dashboard-->
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $sudahdiuji }}</h3>

                <p>Tempat Sudah Diuji</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-done-all"></i>
              </div>
              <a href="/pengujian-sudah-diuji" class="small-box-footer">Lihat Detail  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $akandiuji }}</h3>
                <p>Tempat Akan Diuji</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-time"></i>
              </div>
              <a href="/pengujian-akan-diuji" class="small-box-footer">Lihat Detail  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $belumdiuji }}</h3>
                <p>Tempat Belum Diuji</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-close"></i>
              </div>
              <a href="/pengujian-belum-diuji" class="small-box-footer">Lihat Detail  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- Data Tabel -->
          <div class="col-12">
                  <div>
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Data Pengujian</h3>
                          <div class="text-right">
                            <a href="{{ route('pengujian.create') }}" class="btn btn-primary mb-2"> <i class="fas fa-edit    "></i> Tambah</a>
                            <a href="/pengujian-all" class="btn btn-secondary mb-2" > <i class="fa fa-eye" aria-hidden="true"></i> Tampilkan Seluruh Data</a>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <!--logika berhasil -->
                              @if ($message = Session::get('success'))
                                <div class="alert alert-success" class="text-auto">
                                  <p>{{ $message }}</p>
                                </div>
                              @endif
                          <table class="table table-bordered" id="example1">
                            <thead>
                              <tr>
                                <th  class="text-center">No</th>
                                <th  class="text-center">No Surat Tugas</th>
                                <th  class="text-center">Nama Petugas</th>
                                <th  class="text-center">Jenis Sarana</th>
                                <th class="text-center">Kabupaten</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($pengujians as $pengujian)
                              <tr>
                                <td class="text-center">{{ ++$i }}</td>
                                <td>
                                  <a>
                                  {{ $pengujian->no_surat_tugas }}
                                  </a>
                                </td>
                                <td>{{ $pengujian->nama_petugas }}</td>
                                <td>{{ $pengujian->jenis_sarana }}</td>
                                <td>{{ $pengujian->kabupaten }}</td>
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
                          {!! $pengujians->links() !!}
                          </div>
                        <div class="card-footer">
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
          </div>
          
        </div>
        <!-- /.row -->

            
@section('footer')
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 1.0.0 Alpha
        </div>
        <strong>Copyright &copy; 2021 ImadePOM</strong> All rights reserved.
        @stop
@endsection
