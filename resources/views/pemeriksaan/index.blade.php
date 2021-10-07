@extends('pemeriksaan_teamplate')
@section('title', 'Pemeriksaan | ImadePOM')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pemeriksaan</h1>
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
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-4">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 class="text-center">{{ $mk }}</h3>

                <p class="text-center">Memenuhi Ketentuan</p>
              </div>
              <a href="/pemeriksaan-mk" class="small-box-footer">Lihat Detail  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-4">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3 class="text-center">{{ $tmk }}</h3>
                <p class="text-center">Tidak Memenuhi Ketentuan</p>
              </div>
              <a href="/pemeriksaan-tmk" class="small-box-footer">Lihat Detail  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <div class="container-fluid">
        <div class="row">

        
          <div class="col-lg-3 col-4">
            <div class="small-box bg-white">
              <div class="inner">
                <h3>{{ $pembinaan }}</h3>
                <p>Pembinaan</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-book-outline"></i>
              </div>
              <a href="/pemeriksaan-pembinaan" class="small-box-footer">Lihat Detail  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-4">
            <div class="small-box bg-white">
              <div class="inner">
                <h3>{{ $peringatan }}</h3>
                <p>Peringatan</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-close"></i>
              </div>
              <a href="/pemeriksaan-peringatan" class="small-box-footer">Lihat Detail  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-8">
            <div class="small-box bg-white">
              <div class="inner">
                <h3>{{ $peringatankeras }}</h3>
                <p>Peringatan Keras</p>
              </div>
              <div class="icon">
                <i class="ion ion-alert"></i>
              </div>
              <a href="/pemeriksaan-peringatan-keras" class="small-box-footer">Lihat Detail  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-8">
            <div class="small-box bg-white">
              <div class="inner">
                <h3>{{ $hasilpemeriksaan }}</h3>
                <p>Hasil Pemeriksaan</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-list-outline"></i>
              </div>
              <a href="/pemeriksaan-hasil-pemeriksaan" class="small-box-footer">Lihat Detail  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

            
<!-- Data Tabel -->

<div class="col-12">
        <div>
            <div class="card">
              
              <div class="card-header">
                <div class="">
                  <h4 class="card-title">Data Pemeriksaan</h4>
                </div>
                <div class="text-right">
                  <a href="{{ route('pemeriksaan.create') }}" class="btn btn-primary mb-2 btn-sm"> <i class="fas fa-edit    "></i> Tambah</a>
                  <a href="/pemeriksaan-all" class="btn btn-secondary mb-2 btn-sm" > <i class="fa fa-eye" aria-hidden="true"></i> Tampilkan Seluruh Data</a>
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
                <table class="table table-bordered" id="example1" >
                  <thead>
                    <tr>
                      <th  class="text-center">No</th>
                      <th  class="text-center">Nama Petugas</th>
                      <th  class="text-center">Nama Sarana</th>
                      <th class="text-center">Tanggal Periksa</th>
                      <th class="text-center">Batas Waktu Tindak Lanjut</th>
                      <th class="text-center">Status Laporan</th>
                      <th class="text-center">Batas Waktu Capa 1</th>
                      <th class="text-center">Evaluasi Capa</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($pemeriksaans as $pemeriksaan)
                    <tr>
                      <td class="text-center">{{ ++$i }}</td>
                      <td>
                        <a>
                        {{ $pemeriksaan->nama_petugas }}
                        </a>
                      </td>
                      <td>{{ $pemeriksaan->nama_sarana }}</td>
                      <td>{{ $pemeriksaan->tanggal_periksa }}</td>
                      <td>{{ $pemeriksaan->batas_waktu }}</td>
                      <td>{{ $pemeriksaan->status_laporan }}</td>
                      <td>{{ $pemeriksaan->batas_tanggal_capa1 }}</td>
                      <td>{{ $pemeriksaan->evaluasi_capa1 }}</td>
                      <td class="text-center" style="width: 30;">
                          <form action="{{ route('pemeriksaan.destroy',$pemeriksaan->id) }}" method="POST">
                              <a class="btn btn-info btn-sm" href="{{ route('pemeriksaan.show',$pemeriksaan->id) }}"><i class="fas fa-eye"></i></a>
                              <a class="btn btn-primary btn-sm" href="{{ route('pemeriksaan.edit',$pemeriksaan->id) }}"><i class="fas fa-edit"></i></a>
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
                  <tfoot>
                    
                    
                  </tfoot>
                 
                </table>
                {!! $pemeriksaans->links() !!}
              </div>
              <div class="card-footer">
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
