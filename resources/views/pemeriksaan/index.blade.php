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
    </div>
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Tempat Sudah Diperiksa</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>3</h3>
                <p>Tempat Belum Diperiksa</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>
                <p>Tempat Akan Diperiksa</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
        </div>
        <!-- /.row -->

            
<!-- Data Tabel -->
<div class="col-12">
        <div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pemeriksaan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!--logika berhasil -->
                    @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                        <p>{{ $message }}</p>
                      </div>
                    @endif
                    <a href="{{ route('pemeriksaan.create') }}" class="btn btn-primary mb-2">Tambah</a>
                    <a href="" class="btn btn-secondary mb-2" >Cetak</a>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th  class="text-center">No</th>
                      <th  class="text-center">Nama</th>
                      <th  class="text-center">Bulan</th>
                      <th class="text-center">Kecamatan</th>
                      <th class="text-center">Temuan</th>
                      <th class="text-center">Pemilik Sarana</th>
                      <th class="text-center">Penanggung Jawab</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  @foreach ($pemeriksaans as $pemeriksaan)
                  <tbody>
                    <tr>
                      <td class="text-center">{{ ++$i }}</td>
                      <td>
                        <a>
                        {{ $pemeriksaan->nama }}
                        </a>
                      </td>
                      <td>{{ $pemeriksaan->bulan }}</td>
                      <td>{{ $pemeriksaan->kecamatan }}</td>
                      <td>{{ $pemeriksaan->temuan }}</td>
                      <td>{{ $pemeriksaan->pemilik_sarana }}</td>
                      <td>{{ $pemeriksaan->penanggungjawab }}</td>
                      <td class="text-center" style="width: 30;">
                          <form action="{{ route('pemeriksaan.destroy',$pemeriksaan->id) }}" method="POST">
                              <a class="btn btn-info btn-sm" href="{{ route('pemeriksaan.show',$pemeriksaan->id) }}">Show</a>
                              <a class="btn btn-primary btn-sm" href="{{ route('pemeriksaan.edit',$pemeriksaan->id) }}">Edit</a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                          </form>
                      </td>
                    </tr>

                  </tbody>
                  @endforeach
                </table>
                {!! $pemeriksaans->links() !!}
                </div>
              
            </div>
          </div>
        </div>
        </div>
</div>
@endsection
