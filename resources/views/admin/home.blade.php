<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dashboard</div>
      </a>

      

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Pages Collapse Menu -->

      <!-- Nav Item - Charts -->

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Daftar Toko</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->


      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>
              <!-- Nav Item - Messages -->

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="logout" role="button" data-toggle="dropdown" aria-haspopup="true" id="logout" aria-expanded="false"> 
                  <img class="fas fa-user fa-sm fa-fw mr-2 text-gray-400" src=""> Logout
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  
                </div>
              </li>

            </ul>

          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <main class="main">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item active">Daftar Toko</li>
            </ol>
            <div class="container-fluid">
              <div class="animated fadeIn">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">
                          List Toko
                          <div class="float-right">
                            <a href="{{ route('toko')}}" class="btn btn-primary btn-sm">Tambah</a>
                          </div>
                        </h4>
                      </div>
                      <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <form action="#" method="get">
                          <div class="input-group mb-3 col-md-3 float-right">
                            <input type="text" name="q" class="form-control" placeholder="Cari..." value="{{ request()->q }}">
                            <div class="input-group-append">
                              <button class="btn btn-primary" type="button">Cari</button>
                            </div>
                          </div>
                        </form>
                        <div class="table-responsive">
                          <table class="table table-hover table-bordered">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Logo Toko</th>
                                <th>Nama Toko</th>
                                <th>Lokasi</th>
                                <th>Jumlah Paket</th>
                                <th>Dibuat pada tanggal</th>
                                <th colspan="2">Kelola Data</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($toko as $kios)
                              <tr>
                                <td>{{ $kios->id }}</td>
                                <td>
                                  <img src="{{ asset('storage/toko/' . $kios->logo_toko) }}" width="100px" height="100px" alt="{{ $kios->nama_toko }}">
                                </td>
                                <td>
                                  <strong>{{ $kios->nama_toko }}</strong><br>
                                </td>
                                <td> {{ $kios->lokasi }}</td>
                                <td> {{ $kios->jumlah_paket }}</td>
                                <td>{{ $kios->created_at->format('d-m-Y') }}</td>
                                <td><a href="{{ route('edit', $kios->id)}}" class="btn btn-warning">Edit</a></td>
                                  <td> <form action="{{ route('delete', $kios->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                  </form>
                                </td>
                              </tr>
                              @empty
                              <tr>
                                <td colspan="6" class="text-center">Tidak ada data</td>
                              </tr>
                              @endforelse
                            </tbody>
                          </table>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>        
          <!-- End of Main Content -->

          <!-- Footer -->

          <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

      </div>
      <!-- End of Page Wrapper -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>

      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="admin2/js/sb-admin-2.min.js"></script>

      <!-- Page level plugins -->
      <script src="vendor/chart.js/Chart.min.js"></script>

      <!-- Page level custom scripts -->
      <script src="js/demo/chart-area-demo.js"></script>
      <script src="js/demo/chart-pie-demo.js"></script>
      <script>
        $(document).ready(function(){
          $('#logout').on('click', function(e){
            if(confirm("Are you sure you want to logout?"))
              window.location.href = "http://localhost/WeddingParty/public/login";

            return false;
          });
        });
      </script>


    </body>

    </html>
