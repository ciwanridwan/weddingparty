<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Wedding Organizer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:400,700|Hepta+Slab:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('capture/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ asset('capture/css/bootstrap.min3.css')}}">
    <link rel="stylesheet" href="{{ asset('capture/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('capture/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('capture/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('capture/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('capture/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('capture/css/aos.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('capture/css/style.css')}}">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="{{ route('index')}}" class="font-weight-bold"></a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="{{ route('index')}}" class="nav-link">Home</a></li>
                  <li><a href="{{ route('about')}}" class="nav-link">About</a></li>
                  <li><a href="{{ route('daftar-paket')}}" class="nav-link">Paket</a></li>
                  <li><a href="{{ route('form-paket')}}" class="nav-link">Daftar</a></li>
                  <li><a href="{{ route('contact')}}" class="nav-link">Contact</a></li>
                  <li><a href="{{ route('login')}}" class="nav-link">Admin</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('capture/images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7">
              <p>Halo, Selamat Datang</p>
              <h1 class="mb-3 text-primary"> Information Wedding Organizer</h1>
              <p> Semua informasi tentang toko Wedding organizer ada disini, yuk scroll ke bawah ya!</p>
              <p><a href="{{ route('contact')}}" class="btn btn-primary">Contact Me</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row mb-5 ">
          <div class="col-md-7 text-center mx-auto">
            <span class="subtitle-39293">Lihat Semua Informasi Toko Wedding Organizer</span>
            @if ($status == 1)
            <h2 class="serif">Scroll Ke Bawah Ya!</h2>
          </div>
          @else
          <h2 class="serif">Upss, toko belum tersedia atau belum di input</h2>
          @endif
        </div>

        </div>
      </div>
    </div>  
    <!-- END .site-section -->


        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              @foreach ($toko->where('id', 1) as $p)
              <a href="{{ route('paket-his')}}">
                <img src="{{ asset('storage/toko/' . $p->logo_toko) }}" alt="{{$p->nama_toko}}"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                <h2><a href="{{ route('paket-his')}}">{{$p->nama_toko}}</a></h2>
                <span class="meta d-inline-block mb-3">{{$p->created_at}} <span class="mx-2">by</span> <a href="{{ route('daftar-paket')}}">Admin</a></span>
                <p>{{$p->deskripsi}}</p>
              </div>
              @endforeach
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              @foreach ($toko->where('id', 2) as $p)
              <a href="{{ route('paket-agung')}}">
                <img src="{{ asset('storage/toko/' . $p->logo_toko) }}" alt="{{$p->nama_toko}}"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">    
                <h2><a href="{{ route('paket-agung')}}">{{$p->nama_toko}}</a></h2>
                <span class="meta d-inline-block mb-3">{{$p->created_at}} <span class="mx-2">by</span> <a href="{{ route('daftar-paket')}}">Admin</a></span>
                <p>{{$p->deskripsi}}</p>
              </div>
              @endforeach
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              @foreach ($toko->where('id', 3) as $p)
              <a href="{{ route('paket-hera')}}">
                <img src="{{ asset('storage/toko/' . $p->logo_toko) }}" alt="{{$p->nama_toko}}"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                <h2><a href="{{ route('paket-hera')}}">{{$p->nama_toko}}</a></h2>
                <span class="meta d-inline-block mb-3">{{$p->created_at}} <span class="mx-2">by</span> <a href="{{ route('daftar-paket')}}">Admin</a></span>
                <p>{{$p->deskripsi}}
                </p>
              </div>
              @endforeach
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              @foreach ($toko->where('id', 4) as $p)
              <a href="{{ route('paket-keane')}}">
                <img src="{{ asset('storage/toko/' . $p->logo_toko) }}" alt="{{$p->nama_toko}}"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="{{ route('paket-keane')}}">{{$p->nama_toko}}</a></h2>
                <span class="meta d-inline-block mb-3">{{$p->created_at}} <span class="mx-2">by</span> <a href="{{ route('daftar-paket')}}">Admin</a></span>
                <p>{{$p->deskripsi}}</p>
              </div>
              @endforeach
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              @foreach ($toko->where('id', 5) as $p)
              <a href="{{ route('paket-pangeran')}}">
                <img src="{{ asset('storage/toko/' . $p->logo_toko) }}" alt="{{$p->nama_toko}}" height="50px"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                <h2><a href="{{ route('paket-pangeran')}}">{{$p->nama_toko}}</a></h2>
                <span class="meta d-inline-block mb-3">{{$p->created_at}} <span class="mx-2">by</span> <a href="{{ route('daftar-paket')}}">Admin</a></span>
                <p>{{$p->deskripsi}}</p>
              </div>
              @endforeach
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              @foreach ($toko->where('id', 6) as $p)
              <a href="{{ route('paket-khalifa')}}">
                <img src="{{ asset('storage/toko/' . $p->logo_toko) }}" alt="{{$p->nama_toko}}"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                <h2><a href="{{ route('paket-khalifa')}}">{{$p->nama_toko}}</a></h2>
                <span class="meta d-inline-block mb-3">{{$p->created_at}}<span class="mx-2">by</span> <a href="{{ route('daftar-paket')}}">Admin</a></span>
                <p>{{$p->deskripsi}}</p>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

    

    </div>

    <script src="{{ asset ('capture/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset ('capture/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{ asset ('capture/js/popper.min.js')}}"></script>
    <script src="{{ asset ('capture/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset ('capture/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset ('capture/js/jquery.sticky.js')}}"></script>
    <script src="{{ asset ('capture/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset ('capture/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset ('capture/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{ asset ('capture/js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset ('capture/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset ('capture/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset ('capture/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset ('capture/js/aos.js')}}"></script>

    <script src="{{ asset ('capture/js/main.js')}}"></script>

  </body>

</html>

