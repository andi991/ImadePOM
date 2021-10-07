@extends('penindakan_teamplate')
@section('title', 'Data Temuan | ImadePOM')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.css">
<link rel="stylesheet" href="/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Semua Data Temuan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Temuan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div>
        <div class="container-fluid">
            <div class="card" class="row-100">
                <div class="card-header">
                    <h3 class="card-title">Seluruh Data Temuan</h3>
                </div>
                <div class="card-body">
                <table class="table table-bordered table-hover table-striped" id="example3">
                  <thead>
                  <tr>
                     <th  class="text-center">Nama Produk</th>
                      <th  class="text-center">Bentuk</th>
                      <th class="text-center">Registrasi</th>
                      <th class="text-center">Batch</th>
                      <th class="text-center">Expired Date</th>
                      <th class="text-center">Kategori</th>
                      <th class="text-center">Produsen</th>
                      <th class="text-center">Satuan</th>
                      <th class="text-center">Jumlah</th>
                      <th class="text-center">Nilai Satuan</th>
                      <th class="text-center">Total Nilai Satuan</th>
                      <th class="text-center">Justifikasi</th>
                      <th class="text-center">Aksi</th>
                  </tr>
                  </thead>
                  
                  <tbody>
                  @foreach ($temuan as $data)
                  <tr>
                    <td>{{ $data->nama_produk }}</td>
                    <td>{{ $data->bentuk }}</td>
                    <td>{{ $data->registrasi }}</td>
                    <td>{{ $data->batch }}</td>
                    <td>{{ $data->exp_date }}</td>
                    <td>{{ $data->kategori }}</td>
                    <td>{{ $data->produsen }}</td>
                    <td>{{ $data->satuan }}</td>
                    <td>{{ $data->jumlah }}</td>
                    <td>{{ $data->nilai_satuan }}</td>
                    <td>{{ $data->total_nilai_satuan }}</td>
                    <td>{{ $data->justifikasi }}</td>
                    <td class="text-center" style="width: 30;">
                      <form action="" method="POST">
                          <a class="btn btn-primary btn-sm" href="{{ route('temuan.edit',$data->id) }}"><i class="fas fa-edit"></i></a>
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

@push('js')
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script src="/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
$(document).ready(function(){
    $("#example3").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": true, 
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example1').DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": true, 
    
});
$('#expandable-table-header-row').on('expanded.lte.expandableTable', handleToggledEvent)
})
</script>
@endpush