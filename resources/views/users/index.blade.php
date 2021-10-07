@extends('adminlte::page')
@section('title', 'User Manajer | ImadePOM')
@section('content_header')
    <h1 class="m-0 text-dark">List User</h1>
@stop
@section('content')
    <!--Kotak Dashboard-->
    <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $admin }}</h3>
            <p>Jumlah Admin</p>
          </div>
          <div class="icon">
            <i class="ion ion-android-person"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ $user }}</h3>
            <p>Jumlah User</p>
          </div>
          <div class="icon">
          <i class="ion ion-android-people"></i>
          </div>
        </div>
      </div>
      <!--End Kotak Dashboard-->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div>
                    @if ($message = Session::get('success_message'))
                      <div class="alert alert-success" class="text-auto">
                        <p>{{ $message }}</p>
                      </div>
                    @endif
                    </div>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Hak Akses</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $key => $user)
                            <tr>
                                <td class="text-center">{{$key+1}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                                <td class="text-center">
                                    <a href="{{route('users.edit', $user)}}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-user-edit fa-sm"></i>
                                    </a>
                                    <a href="{{route('users.destroy', $user)}}" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm" >
                                        <i class="fas fa-user-times fa-sm"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            
                        </tfoot>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="{{route('users.create')}}" class="btn btn-primary mb-2">
                            <i class="fa fa-user-plus" aria-hidden="true"></i> Tambah
                        </a>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
@stop
@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });
        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }
    </script>

@endpush

@push('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush