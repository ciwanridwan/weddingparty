<!DOCTYPE html>
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
              <a href="{{ route('index')}}" class="font-weight-bold"></a>
            </div>
          </div>
          @include('layout.header')
        </div>
      </div>
    </header>
    @yield('konten')  
  <!-- END .site-section -->

  <footer class="site-footer">
    <div class="container">
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
@yield('js')

</body>
</html>

