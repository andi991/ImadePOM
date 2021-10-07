
@if (auth()->user()->role == "admin")
<aside class="main-sidebar {{ config('adminlte.classes_sidebar2', 'sidebar-dark-primary elevation-4') }}">

  {{-- Sidebar brand logo --}}
  @if(config('adminlte.logo_img_xl'))
      @include('adminlte::partials.common.brand-logo-xl')
  @else
      @include('adminlte::partials.common.brand-logo-xs')
  @endif

  {{-- Sidebar menu --}}
  <br>
<ul
  class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}"
          data-widget="treeview" role="menu" 
          @if(config('adminlte.sidebar_nav_animation_speed') != 300)
              data-animation-speed="{{ config('adminlte.sidebar_nav_animation_speed') }}"
          @endif
          @if(!config('adminlte.sidebar_nav_accordion'))
              data-accordion="false"
          @endif>
    <nav class="mt-2">
      <li class="nav-header">SEARCH MENU</li>
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">DASHBOARD</li>
          <li class="nav-item">
            <a href="/home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/home" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MENU UTAMA</li>
          <li class="nav-item">
            <a href="/pemeriksaan" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Pemeriksaan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pemeriksaan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemeriksaan Dahsboard</p>
                </a>
            </li>
            <li class="nav-item">
              <a href="/pemeriksaan/create" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tambah Data</p>
              </a>
            </li>
              <li class="nav-item">
                <a href="/pemeriksaan-all" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seluruh Data</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/pengujian" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pengujian
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pengujian" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard Pengujian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pengujian/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pengujian-all" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seluruh Data</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Penindakan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/penindakan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penindakan Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/penindakan/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/penindakan-all" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seluruh Data</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">USER MANAJER</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User Manajer
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/users" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/users/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data</p>
                </a>
              </li>
            </ul>
          </li>
          
        </nav>

@endif
</aside>

<!-- Role User -->
@if (auth()->user()->role == "user")
<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

  {{-- Sidebar brand logo --}}
  @if(config('adminlte.logo_img_xl'))
      @include('adminlte::partials.common.brand-logo-xl')
  @else
      @include('adminlte::partials.common.brand-logo-xs')
  @endif

  {{-- Sidebar menu --}}
  <br>
<ul
  class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}"
          data-widget="treeview" role="menu" 
          @if(config('adminlte.sidebar_nav_animation_speed') != 300)
              data-animation-speed="{{ config('adminlte.sidebar_nav_animation_speed') }}"
          @endif
          @if(!config('adminlte.sidebar_nav_accordion'))
              data-accordion="false"
          @endif>
      <nav class="mt-2">
        <li class="nav-header">SEARCH MENU</li>
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">DASHBOARD</li>
          <li class="nav-item">
            <a href="/home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/home" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MENU UTAMA</li>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pemeriksaan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemeriksaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pemeriksaan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard Pemeriksaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pemeriksaan-all" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seluruh Data Pemeriksaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-sidebar-custom.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar <small>+ Custom Area</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/pemeriksaan" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Pemeriksaan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pemeriksaan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemeriksaan Dahsboard</p>
                </a>
            </li>
            <li class="nav-item">
              <a href="/pemeriksaan/create" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tambah Data</p>
              </a>
            </li>
              <li class="nav-item">
                <a href="/pemeriksaan-all" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seluruh Data</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/pengujian" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pengujian
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pengujian" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard Pengujian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pengujian/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pengujian-all" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seluruh Data</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Penindakan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/penindakan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penindakan Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/penindakan/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/penindakan-all" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seluruh Data</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
</aside>

@endif
<!--End Role User-->
</ul>


@section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/assets/plugins/jqvmap/jqvmap.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/assets/plugins/summernote/summernote-bs4.min.css">
  
@stop

@push('js')
    <script> console.log('Hi!'); </script>
    <script src="/assets/plugins/moment/moment.min.js"></script>
    <script src="/assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="/assets/dist/js/adminlte.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/dist/js/adminlte.min.js"></script>
@endpush
