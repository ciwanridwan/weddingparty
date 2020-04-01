<!doctype html>
<html lang="en">

  <head>
    <title>Daftar Paket</title>
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
    <!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('glamour/css/bootstrap.min.css')}}"/>
	<!-- <link rel="stylesheet" href="{{ asset('glamour/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('glamour/css/owl.carousel.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('glamour/css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{ asset('glamour/css/magnific-popup.css')}}"/> -->

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{ asset('glamour/css/style.css')}}"/>


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
                  <li class="active"><a href="{{ route('photograpy')}}" class="nav-link">Photography</a></li>
                  <li><a href="{{ route('blog')}}" class="nav-link">Event</a></li>
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
              <p> Silahkan Liat Daftar Paketnya Dibawah Ya!.</p>
              <!-- <p><a href="#" class="btn btn-primary">Contact Me</a></p> -->
            </div>
          </div>
        </div>
      </div>
    </div>


  
    
    <section class="shop-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="shop-item">
						<img src="{{ asset ('capture/images/img_1.jpg')}}" alt="">
            <h2>Silver</h2>
            <h3>Rp 7.500.000</h3>
            <h3>6 Crew WO</h3>
            <h3>+- 350 undangan</h3>
            <h3>Half Day</h3>
            <h3>(8 Jam Kerja)</h3>
						<!-- <h6>$235</h6> -->
						<a href="" class="add-card">Beli Paket</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="shop-item">
						<img src="{{ asset ('capture/images/img_2.jpg')}}" alt="">
            <h2>Gold</h2>
            <h3>Rp 9.500.000</h3>
            <h3>8 Crew WO</h3>
            <h3>+- 450 undangan</h3>
            <h3>Half Day</h3>
            <h3>(8 Jam Kerja)</h3>
            <!-- <h3>Black Dress</h3>
						<h6>$235</h6> -->
						<a href="" class="add-card">Add to cart</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="shop-item">
						<img src="{{ asset ('capture/images/img_3.jpg')}}" alt="">
            <h2>Platinum</h2>
            <h3>Rp 12.500.000</h3>
            <h3>10 Crew WO</h3>
            <h3>+- 6000 undangan</h3>
            <h3>Half Day</h3>
            <h3>(8 Jam Kerja)</h3>
            <!-- <h3>White Shirt</h3>
						<h6>$235</h6> -->
						<a href="" class="add-card">Add to cart</a>
					</div>
				</div>
				<!-- <div class="col-lg-3 col-sm-6">
					<div class="shop-item">
						<img src="img/shop/4.jpg" alt="">
						<h3>Trousers</h3>
						<h6>$235</h6>
						<a href="" class="add-card">Add to cart</a>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<!-- Shop section end -->
	
    <!-- <div class="site-section">
      <div class="container">

        <div id="posts" class="row no-gutter">

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('capture/images/img_1.jpg')}}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset ('capture/images/img_1.jpg')}}">
            </a>
            <h1 style="text-align:center;">Silver</h1>
            <br>
            <h3 style="text-align:center;">Rp 7.500.000</h3>
            <h4 style="text-align:center;">6 Crew WO</h4>
            <h4 style="text-align:center;">+- 350 undangan</h4>
            <h4 style="text-align:center;">Half Day</h4>
            <h4 style="text-align:center;">(8 Jam kerja)</h4> -->
            <!-- <button type="button">Beli Paket</button> -->
          <!-- </div> -->

          <!-- <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('capture/images/img_2.jpg')}}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset ('capture/images/img_2.jpg')}}">
            </a>
            <h1 style="text-align:center;">Gold</h1>
            <br>
            <h3 style="text-align:center;">Rp 9.500.000</h3>
            <h4 style="text-align:center;">8 Crew WO</h4>
            <h4 style="text-align:center;">+- 450 undangan</h4>
            <h4 style="text-align:center;">Half Day</h4>
            <h4 style="text-align:center;">(8 Jam kerja)</h4>
            <button type="button">Beli Paket</button>
          </div> -->

          <!-- <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('capture/images/img_3.jpg')}}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset ('capture/images/img_3.jpg')}}">
            </a>
            <h1 style="text-align:center;">Platinum</h1>
            <br>
            <h3 style="text-align:center;">Rp 12.500.000 </h3>
            <h4 style="text-align:center;">10 Crew WO</h4>
            <h4 style="text-align:center;">+- 600 undangan</h4>
            <h4 style="text-align:center;">Half Day</h4>
            <h4 style="text-align:center;">(8 Jam kerja)</h4>
            <button type="button">Beli Paket</button>
          </div> -->

          <!-- <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('capture/images/img_4.jpg')}}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset ('capture/images/img_4.jpg')}}">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('capture/images/img_5.jpg')}}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset ('capture/images/img_5.jpg')}}">
            </a>
          </div> -->

          <!-- <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('capture/images/img_6.jpg')}}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset ('capture/images/img_6.jpg')}}">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('capture/images/img_1.jpg')}}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset ('capture/images/img_1.jpg')}}">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('capture/images/img_2.jpg')}}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset('capture/images/img_2.jpg')}}">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('capture/images/img_3.jpg')}}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset ('capture/images/img_3.jpg')}}">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('capture/images/img_4.jpg')}}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset ('capture/images/img_4.jpg')}}">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('capture/images/img_5.jpg')}}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset ('capture/images/img_5.jpg')}}">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('capture/images/img_6.jpg')}}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset ('capture/images/img_6.jpg')}}">
            </a>
          </div> -->
        <!-- </div>
      </div>
    </div> -->
  

    <!-- <div class="site-section">
      <div class="container">
        <div class="row mb-5 ">
          <div class="col-md-7 text-center mx-auto">
            <span class="subtitle-39293">See The Video</span>
            <h2 class="serif">See The Video</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">

            <a href="https://vimeo.com/191947042" data-fancybox  class="btn-video_38929">
              <span><span class="icon-play"></span></span>
              <img src="{{ asset ('capture/images/img_1.jpg')}}" alt="Image" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
    </div> -->

    

    <!-- <footer class="site-footer">
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
              <p> -->
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a> -->
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <!-- </p>
            </div>
          </div>

        </div>
      </div>
    </footer> -->
    <!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7 order-md-1 order-2">
					<img src="img/logo-dark.png" alt="" class="footer-logo">
					<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 order-md-2 order-1">
					<ul class="footer-contact-list">
						<li><span>Address:</span>Main Str, no 23, New York</li>
						<li><span>Phone:</span>+546 990221 123</li>
						<li><span>Mail:</span>model@contact.com</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->


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

  <script src="{{ asset ('glamour/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset ('glamour/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset ('glamour/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset ('glamour/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset ('glamour/js/isotope.pkgd.min.js')}}"></script>
	<script src="{{ asset ('glamour/js/circle-progress.min.js')}}"></script>
	<script src="{{ asset ('glamour/js/main.js')}}"></script>

  </body>

</html>

