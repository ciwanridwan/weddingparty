<!doctype html>
<html lang="en">

  <head>
    <title>Wedding Organizer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:400,700|Hepta+Slab:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('capture/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ asset('capture/css/bootstrap.min.css')}}">
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
                <a href="{{ route('index')}}" class="font-weight-bold">Capture</a>
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
            <h2 class="serif">Scroll Ke Bawah Ya!</h2>
          </div>
        </div>

        </div>
      </div>
    </div>  
    <!-- END .site-section -->


        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="{{ route('daftar-paket')}}">
                <img src="{{ asset ('capture/poto/His/8.jpg')}}" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="{{ route('daftar-paket')}}">HIS Wedding</a></h2>
                <span class="meta d-inline-block mb-3">April 17, 2020 <span class="mx-2">by</span> <a href="{{ route('daftar-paket')}}">Admin</a></span>
                <p>Menyediakan berbagai paket untuk keperluan wedding.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="{{ route('daftar-paket')}}">
                <img src="{{ asset ('capture/poto/Agung/1.jpg')}}" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="{{ route('daftar-paket')}}">Agung Wedding</a></h2>
                <span class="meta d-inline-block mb-3">Mei 11, 2020 <span class="mx-2">by</span> <a href="{{ route('daftar-paket')}}">Admin</a></span>
                <p>Tersedia decorasi yang amat sangat unik, dan menyediakan panggung.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="{{ route('daftar-paket')}}">
                <img src="{{ asset ('capture/poto/Hera/4.jpg')}}" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="{{ route('daftar-paket')}}">Hera Organizer</a></h2>
                <span class="meta d-inline-block mb-3">June 18, 2020 <span class="mx-2">by</span> <a href="{{ route('daftar-paket')}}">Admin</a></span>
                <p>Hera Organizer ini sudah terpercaya oleh pihak manapun, kami menyediakan paket wedding yang murah</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="{{ route('daftar-paket')}}">
                <img src="{{ asset ('capture/poto/Keane/1.jpg')}}" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="{{ route('daftar-paket')}}">Keane Wedding</a></h2>
                <span class="meta d-inline-block mb-3">June 18, 2020 <span class="mx-2">by</span> <a href="{{ route('daftar-paket')}}">Admin</a></span>
                <p>Pelayanan terbaik untuk para peminat Keane Wedding.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="{{ route('daftar-paket')}}">
                <img src="{{ asset ('capture/poto/Pangeran/2.jpg')}}" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="{{ route('daftar-paket')}}">Pangeran Wedding</a></h2>
                <span class="meta d-inline-block mb-3">June 18, 2020 <span class="mx-2">by</span> <a href="{{ route('daftar-paket')}}">Admin</a></span>
                <p>Panggung gratis, decorasi unik, kateringpun kami menyediakan.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="{{ route('daftar-paket')}}">
                <img src="{{ asset ('capture/poto/Pangeran/9.jpg')}}" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="{{ route('daftar-paket')}}">Dinda Sakato Organizer</a></h2>
                <span class="meta d-inline-block mb-3">June 18, 2020 <span class="mx-2">by</span> <a href="{{ route('daftar-paket')}}">Admin</a></span>
                <p>Ciri khas kami ialah tradisional, hayu mari diliat tentang Dinda Sakato ini.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer">
      <div class="container">
        @yield('konten')
        <div class="row">
          <div class="col-lg-3">
            <h2 class="footer-heading mb-3">About Me</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-6 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <h2 class="footer-heading mb-4">Newsletter</h2>
                <form action="#" class="d-flex" class="subscribe">
                  <input type="text" class="form-control mr-3" placeholder="Email">
                  <input type="submit" value="Send" class="btn btn-primary">
                </form>
              </div>
              
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

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

