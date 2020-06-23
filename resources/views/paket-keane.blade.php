<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Daftar Paket</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:400,700|Hepta+Slab:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset ('capture/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ asset('capture/css/bootstrap.min2.css')}}">
    <link rel="stylesheet" href="{{ asset('capture/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('capture/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('capture/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('capture/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('capture/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('capture/css/aos.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('capture/css/style2.css')}}">

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
                  <li><a href="{{ route('index')}}" class="nav-link">Home</a></li>
                  <li><a href="{{ route('about')}}" class="nav-link">About</a></li>
                  <li class="active"><a href="{{ route('daftar-paket')}}" class="nav-link">Paket</a></li>
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
              <h1 class="mb-3 text-primary">Daftar Paket</h1>
              <p> Silahkan Scroll Kebawah Untuk Melihat Daftar Paket Yang Disediakan</p>
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
            <!-- <span class="subtitle-39293">My Works</span> -->
            <h2 class="serif">Liat Daftar Paket</h2>
          </div>
        </div>
       
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="{{ route('index')}}">
                <img src="{{ asset ('capture/images/img_1.jpg')}}" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h1><a style="text-align:center;" href="{{ route('index')}}">Half Package</a></h1>
                <br>
            <h3 style="text-align:center;">Rp 10.000.000</h3>
            <h3 style="text-align:center;">8 Crew WO</h3>
            <h3 style="text-align:center;">+- 350 Undangan</h3>
            <h3 style="text-align:center;">3x Meeting</h3>
            <h3 style="text-align:center;">Wedding Rundown</h3>
            <h3 style="text-align:center;">Half Day</h3>
            <h3 style="text-align:center;">(8 Jam Kerja)</h3>
            </div>
            <a href="{{ route('detail-keane')}}"  class="btn btn-primary" type="submit">Beli Paket</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="{{ route('index')}}">
                <img src="{{ asset ('capture/images/img_2.jpg')}}" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h1><a style="text-align:center;" href="{{ route('index')}}">Full Package</a></h1>
                <br>   
            <h3 style="text-align:center;">Rp 15.000.000</h3>
            <h3 style="text-align:center;">9 Crew WO</h3>
            <h3 style="text-align:center;">+- 600 Undangan</h3>
            <h3 style="text-align:center;">Wedding Rundown</h3>
            <h3 style="text-align:center;">Wedding Report</h3>
            <h3 style="text-align:center;">Half Day</h3>
            <h3 style="text-align:center;">(8 Jam Kerja)</h3>
            </div>
            <a href="{{ route('detail-keane')}}" class="btn btn-primary" type="submit">Beli Paket</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="{{ route('index')}}">
                <img src="{{ asset('capture/images/img_3.jpg')}}" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h1><a style="text-align:center;" href="{{ route('index')}}">Speed Package</a></h1>
                <br>
            <h3 style="text-align:center;">Rp 20.000.000</h3>
            <h3 style="text-align:center;">10 Crew WO</h3>
            <h3 style="text-align:center;">+- 800 Undangan</h3>
            <h3 style="text-align:center;">Wedding Rundown Dan Report</h3>
            <h3 style="text-align:center;">Vendor Dealing</h3>
            <h3 style="text-align:center;">Unlimited Meeting</h3>
            <h3 style="text-align:center;">Half Day</h3>
            <h3 style="text-align:center;">(8 Jam Kerja)</h3>
            </div>
            <a href="{{ route('detail-keane')}}" type="submit" class="btn btn-primary">Beli Paket</a>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <!-- END .site-section -->
    
    

    

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

