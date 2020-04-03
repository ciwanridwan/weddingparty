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
                    <li><a href="{{ route('index')}}" class="nav-link">Home</a></li>
                    <li><a href="{{ route('about')}}" class="nav-link">About</a></li>
                    <li><a href="{{ route('daftar-paket')}}" class="nav-link">Paket</a></li>
                    <li class="active"><a href="{{ route('form-paket')}}" class="nav-link">Daftar</a></li>
                  <li><a href="{{ route('contact')}}" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-color:grey;">
      <!-- <div class="site-section-cover overlay" style="background-image: url('capture/images/hero_1.jpg')"> -->
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7">
              <!-- <p>Halo, Selamat Datang</p> -->
              <h1 class="mb-3 text-primary"> Terimasih Sudah Registrasi</h1>
              <h3 class="mb-3 text-primary"> Silahkan Transfer Ke No.Rekening 2019488292 A.N Biduanto, DP 30% Sebagai Tanda Jadi.</h3>
              <h3 class="mb-3 text-primary"> Harap Kirim Bukti Ke Nomor WA 081385433322</h3>
              <!-- <p> Semua informasi tentang toko Wedding organizer ada disini, yuk scroll ke bawah ya!</p> -->
              <!-- <p><a type="button" class="btn btn-primary" href="https://api.whatsapp.com/send?phone=6281385433322&text=Hai%20saya%20{$nama}%20ingin%20memesan%20Wedding%20Organizer%20untuk%20tanggal%20{$tanggal}%20dan%20untuk%20{$jumUndangan}%20undangan,%20lokasi%20berada%20di%20alamat%20{$alamat}">Kirim Bukti</a></p> -->
              <p><button type="button" class="btn btn-primary" id="btnWa" value="Whatsapp"> Kirim Bukti </button></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>  
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
            <!-- <button type="button" value="btnWa" class="btn btn-primary" id="btnWa">Kirim Bukti</button> -->
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

<script> 
$('button').click(function(){
   window.location.href='https://api.whatsapp.com/send?phone=6281385433322&text=Hai%20saya%20{$nama}%20ingin%20memesan%20Wedding%20Organizer%20untuk%20tanggal%20{$tanggal}%20dan%20untuk%20{$jumUndangan}%20undangan,%20lokasi%20berada%20di%20alamat%20{$alamat}';
})
</script> 
  </body>

</html>