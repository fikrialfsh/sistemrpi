

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Halaman Tambah Peminjaman </title>
  <!-- Favicon -->

  <link rel="icon" href="{{asset('assets/img/brand/logo.png') }}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="{{asset('assets/css/argon.css?v=1.2.0" type="text/css') }}">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{asset('assets/img/brand/icon.png') }}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Nav items -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="{{url('/home')}}">
                  <i class="ni ni-tv-2 text-primary"></i>
                  <span class="nav-link-text">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/anggota')}}">
                  <i class="fas fa-user-friends text-primary"></i>
                  <span class="nav-link-text">Data Anggota</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/inventaris')}}">
                  <i class="fas fa-box-open text-primary"></i>
                  <span class="nav-link-text">Inventaris Barang</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/proker')}}">
                  <i class="fas fa-clipboard-list text-primary"></i>
                  <span class="nav-link-text">Program Kerja</span>
                </a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="{{url('/peminjaman')}}">
                <i class="fas fa-list text-primary"></i>
                <span class="nav-link-text">Peminjaman Barang</span>
              </a>
            </li>


            </ul>

            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->

            <!-- Navigation -->
          </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>

          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
          <div class="header-body">
            <div class="row align-items-center py-4">
              <div class="col-lg-11 col-12">
                <h6 class="h2 text-white d-inline-block mb-0">Tambah Peminjaman</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{url('/mitra')}}"></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Peminjaman</li>
                  </ol>
                </nav>


                    <div class="card-action">
                         <form role="form" method="post" action="{{ url('/peminjaman/tambahdata') }}" >
                            {{ csrf_field() }}
                         <div class="box-body">
                         <div class="form-group">

                                 <input type="text" name="kode_peminjaman" class="form-control" placeholder="Kode Peminjaman" >
                                 @if($errors->has('kode_peminjaman'))
                                     <div class="text-danger">
                                         {{ $errors->first('kode_peminjaman')}}
                                     </div>
                                 @endif

                             </div>


                         <div class="form-group">

                                 <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" >
                                 @if($errors->has('nama_barang'))
                                     <div class="text-danger">
                                         {{ $errors->first('nama_barang')}}
                                     </div>
                                 @endif

                             </div>
                          
                         <div class="form-group">

                                 <input type="text" name="nama_peminjam" class="form-control" placeholder="Nama Peminjam" >
                                 @if($errors->has('nama_peminjam'))
                                     <div class="text-danger">
                                         {{ $errors->first('nama_peminjam')}}
                                     </div>
                                 @endif

                         </div>
                        <div class="form-group">

                                 <input type="date" name="tgl_pinjam" class="form-control" placeholder="Tanggal Peminjaman" >
                                 @if($errors->has('tgl_pinjam'))
                                     <div class="text-danger">
                                         {{ $errors->first('tgl_pinjam')}}
                                     </div>
                                 @endif

                         </div>
                         <div class="form-group">

                                 <input type="date" name="tgl_kembali" class="form-control" placeholder="Tanggal Kembali" >
                                 @if($errors->has('tgl_kembali'))
                                     <div class="text-danger">
                                         {{ $errors->first('tgl_kembali')}}
                                     </div>
                                 @endif

                         </div>
                          <div class="form-group">

                                 <input type="text" name="catatan" class="form-control" placeholder="catatan" >
                                 @if($errors->has('catatan'))
                                     <div class="text-danger">
                                         {{ $errors->first('catatan')}}
                                     </div>
                                 @endif

                         </div>


                 <!-- /.box-body -->


                 <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
                 </form>

              </div>
            </div>
          </div>
        </div>
      </div>





        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>

        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->

  <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{asset('assets/js/argon.js?v=1.2.0') }}"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
  {{-- @include('sweet::alert') --}}
  <script>
    $(function () {
        $("#datatables").DataTable();
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        });
    });
    </script>
          @include('sweet::alert')
</body>

</html>
