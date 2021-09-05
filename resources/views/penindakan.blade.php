@extends('adminlte::page')
@section('title', 'Penindakan | Imade POM')


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

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Tempat Sudah Ditindak</p>
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
                <h3>53</h3>

                <p>Tempat Belum Ditindak</p>
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

                <p>Tempat Akan Ditindak</p>
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
        <!-- Main row -->

<!--Data Table-->
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="/tambah-penindakan" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <a href="/tambah" class="btn btn-secondary mb-2" >
                        Cetak
                    </a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No Surat Tugas</th>
                            <th>Petugas</th>
                            <th>Tindak Lanjut</th>
                            <th>Tanggal Surat Tindak Lanjut</th>
                            <th>Nomor Surat Tindak Lanjut</th>
                            <th>Batas Waktu</th>
                            <th>Lama Penyelesaian Laporan Tindak Lanjut</th>
                            <th>Status Penyelesaian Laporan Tindak Lanjut</th>
                            <th>Status Penyelesaian Laporan Tindak Lanjut</th>
                            <th>Tanggal Surat Tindak Lanjut II</th>
                            <th>Tanggal CAPA I</th>
                            <th>Tanggal Open CAPA</th>
                            <th>Tanggal Feedback dari Lintas Sektor</th>
                            <th>Tanggal Imput SIPT</th>
                            <th>Tahun</th>
                            <th>Keterangan</th>
                            <th>Tanggal Terkirim ke SVP I</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>99391991</td>
                                <td>Luis</td>
                                <td>20/07/2021</td>
                                <td>9929192</td>
                                <td>9992112</td>
                                <td>30 hari</td>
                                <td>10 hari</td>
                                <td>Selesai</td>
                                <td>Selesai</td>
                                <td>10/08/2021</td>
                                <td>11/08/2021</td>
                                <td>12/08/2021</td>
                                <td>13/08/2021</td>
                                <td>14/08/2021</td>
                                <td>2021</td>
                                <td>Baik</td>
                                <td>16/08/2021</td>
                                <td>
                                    <a href="/tambah-penindakan" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Delete
                                    </a>
                                    <a href="" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Cetak
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>


@stop

@section('css')
 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@stop