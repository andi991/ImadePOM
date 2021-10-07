@extends('penindakan_teamplate')
@section('title', 'Data penindakan | ImadePOM')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Penindakan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/penindakan">Penindakan</a></li>
              <li class="breadcrumb-item active">Data Penindakan</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="row-5">
      <div class="col-16">
        <diV class="card">
          <div class="card-header">
            <h3 class="card-title">Data atas Nama : <b>{{$penindakan->pemilik}}</b></h3>
          </div>
          <div class="card-body">
            <div>
              <label>No Surat Tugas</label>
            </div>
            <div class="table-bordered">
              <div class="row-17">
                <div class="col-10">
                  {{$penindakan->no_surat_tugas}}
                </div>
              </div>
            </div>
            <div>
              <label>No LHP</label>
            </div>
            <div class="table-bordered">
              {{$penindakan->no_lhp}}
            </div>
            <div>
              <label>Nama Sarana</label>
            </div>
            <div class="table-bordered">
              {{$penindakan->nama_sarana}}
            </div>
            <div>
              <label>Alamat</label>
            </div>
            <div class="table-bordered">
              {{$penindakan->alamat}}
            </div>
            <div>
              <label>Kabupaten</label>
            </div>
            <div class="table-bordered">
              {{$penindakan->kabupaten}}
            </div>
            <div>
              <label>Telepon</label>
            </div>
            <div class="table-bordered">
              {{$penindakan->telepon}}
            </div>
            <div>
              <label>Pemilik / Pimpinan</label>
            </div>
            <div class="table-bordered">
              {{$penindakan->pemilik}}
            </div>
            <div>
              <label>Golongan</label>
            </div>
            <div class="table-bordered">
              {{$penindakan->golongan}}
            </div>
            <div>
              <label>Uraian Temuan</label>
            </div>
            <div class="table-bordered">
              {{$penindakan->uraian_temuan}}
            </div>
            <div>
              <label>Kategori Temuan</label>
            </div>
            <div class="table-bordered">
              {{$penindakan->kategori_temuan}}
            </div>
            <div>
              <label>Tindakan</label>
            </div>
            <div class="table-bordered">
              {{$penindakan->tindakan}}
            </div>
            <div>
              <label>Tanggal</label>
            </div>
            <div class="table-bordered">
              {{$penindakan->tanggal}}
            </div>
            <div>
              <label>Kesimpulan</label>
            </div>
            <div class="table-bordered">
              {{$penindakan->kesimpulan}}
            </div>
            <div>
              <label>Tindak Lanjut</label>
            </div>
            <div class="table-bordered">
              {{$penindakan->tindak_lanjut}}
            </div>
            <div>
              <label>Tempat Simpan</label>
            </div>
            <div class="table-bordered">
              {{$penindakan->tempat_simpan}}
            </div>
            <div>
              <label>Status</label>
            </div>
            <div class="table-bordered">
              {{$penindakan->status}}
            </div>
            <br>
            <br>
            <div class="text-center">
              <h3>Data Temuan</h3>
            </div>
            <div class="row 2">
            <div class="col-12">
            <table class="table table-bordered table-hover table-striped" id="example1" >
              <thead>
              <tr>
                 <th  class="text-center">Nama Produk</th>
                 <th  class="text-center">Bentuk</th>
                 <th  class="text-center">Registrasi</th>
                 <th  class="text-center">Batch</th>
                 <th  class="text-center">Expired Date</th>
                 <th  class="text-center">Kategori</th>
                 <th  class="text-center">Produsen</th>
                 <th  class="text-center">Satuan</th>
                 <th  class="text-center">Jumlah</th>
                 <th  class="text-center">Nilai Satuan</th>
                 <th  class="text-center">Total Nilai Satuan</th>
                 <th  class="text-center">Justifikasi</th>
              </tr>
              </thead>
              
              <tbody>
             
                @foreach($penindakan->temuan as $data)
              <tr>
                    <td>{{ $data->nama_produk}}</td>
                    <td>{{ $data->bentuk}}</td>
                    <td>{{ $data->registrasi}}</td>
                    <td>{{ $data->batch}}</td>
                    <td>{{ $data->exp_date}}</td>
                    <td>{{ $data->kategori}}</td>
                    <td>{{ $data->produsen}}</td>
                    <td>{{ $data->satuan}}</td>
                    <td>{{ $data->jumlah}}</td>
                    <td>{{ $data->nilai_satuan}}</td>
                    <td>{{ $data->total_nilai_satuan}}</td>
                    <td>{{ $data->justifikasi}}</td>
                    
                  </tr>
                  @endforeach
              </tbody>
            </table>
            </div>
            </div>
          </div>
          
          <div class="card-footer">
            <div class="text-right">
              <a href="{{ route('penindakan.edit' ,$penindakan->id) }}" class="btn btn-primary">Edit</a>
              @csrf
              @method('DELETE')
              <a type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
              <a href="{{ route('penindakan.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
          </div>
        </diV>
      </div>
    </div>

    @section('footer')
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0 Alpha
    </div>
    <strong>Copyright &copy; 2021 ImadePOM</strong> All rights reserved.
    @stop
@endsection