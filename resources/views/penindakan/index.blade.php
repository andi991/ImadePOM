@extends('penindakan_teamplate')
@section('title', 'Penindakan | ImadePOM')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Penindakan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Penindakan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
    </div>
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-4">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $sudahditindak }}</h3>

                <p>Data Barang Tetap</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-done-all"></i>
              </div>
              <a href="/penindakan-sudah-ditindak" class="small-box-footer">Lihat Detail  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-4">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $akanditindak }}</h3>
                <p>Data Barang Dikeluarkan</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-time"></i>
              </div>
              <a href="/penindakan-akan-ditindak" class="small-box-footer">Lihat Detail  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- Data Tabel -->
          <div class="col-12">
                  <div>
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Data Penindakan</h3>
                          <div class="text-right">
                            <a href="{{ route('penindakan.create') }}" class="btn btn-primary mb-2"> <i class="fas fa-edit"></i> Tambah</a>
                            <a href="/tambah-temuan" class="btn btn-warning mb-2" ><i class="fa fa-edit" aria-hidden="true"></i> Tambah Data Temuan</a>
                            <a href="/penindakan-all" class="btn btn-secondary mb-2" ><i class="fa fa-eye" aria-hidden="true"></i> Tampilkan Semua Data</a>
                            <a href="{{ route('temuan.index') }}" class="btn btn-primary mb-2"> <i class="fas fa-eye"></i> Tampilkan Data Temuan</a>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <div>
                              @if ($message = Session::get('success'))
                                <div class="alert alert-success" class="text-auto">
                                  <p>{{ $message }}</p>
                                </div>
                              @endif
                              <!--logika berhasil -->
                          </div>
                          <table class="table table-bordered" id="example1">
                            <thead>
                              <tr>
                                <th  class="text-center">No</th>
                                <th  class="text-center">Nama Sarana</th>
                                <th  class="text-center">No Surat Tugas</th>
                                <th class="text-center">Pemilik / Pimpinan</th>
                                <th class="text-center">Kategori Temuan</th>
                                <th class="text-center">Status Penindakan</th>
                                <th class="text-center">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($penindakans as $penindakan)
                              <tr>
                                <td class="text-center">{{ ++$i }}</td>
                                <td>
                                  <a>
                                  {{ $penindakan->nama_sarana }}
                                  </a>
                                </td>
                                <td>{{ $penindakan->no_surat_tugas}}</td>
                                <td>{{ $penindakan->pemilik}}</td>
                                <td>{{ $penindakan->kategori_temuan}}</td>
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
                          {!! $penindakans->links() !!}
                          </div>
                          <div class="card-footer">
                          </div>
                      </div>
                    </div>
                  </div>
                  </div>
          </div>
          
        </div>

        @section('footer')
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 1.0.0 Alpha
        </div>
        <strong>Copyright &copy; 2021 ImadePOM</strong> All rights reserved.
        @stop

@endsection
