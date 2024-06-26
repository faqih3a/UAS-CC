<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rental Mobil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Rental<span>Mobil</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item active"><a href="{{url('sewa')}}" class="nav-link">Sewa</a></li>
	          <li class="nav-item"><a href="#ft" class="nav-link">Contact</a></li>
            @if (Route::has('login'))
            @auth
            @else
            <li class="nav-item"><a href="{{url('login')}}" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="{{url('register')}}" class="nav-link">Register</a></li>
            @endauth
            @endif
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Sewa<i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Form Sewa</h1>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section">
      <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                      {{ session('success')}}
                    </div>
                    <script>
                      setTimeout(function() {
                          $('.alert').fadeOut('slow');
                      }, 4000);
                    </script>
                  @endif
                <!-- form validasi -->
                <form class="forms-sample" action="{{ url('/')}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="tanggal_mulai" class="col-sm-4 col-form-label">Tanggal Mulai</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai"
                                placeholder="Tanggal Mulai">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="tanggal_akhir" class="col-sm-4 col-form-label">Tanggal Akhir</label>
                      <div class="col-sm-8">
                          <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir"
                              placeholder="Tanggal akhir">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="tujuan" class="col-sm-4 col-form-label">Tujuan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="tujuan" name="tujuan"
                                placeholder="Tujuan">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="mobil_id" class="col-sm-4 col-form-label">Mobil Id</label>
                      <div class="col-sm-8">
                          <select name="mobil_id" id="mobil_id" class="form-control">
                              @foreach ($mobil as $mobil)
                                  <option value="{{ $mobil->id }}">{{ $mobil->nama }}</option>
                              @endforeach
                          </select>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_customer" class="col-sm-4 col-form-label">Nama Anda</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_customer" name="nama_customer"
                                placeholder="Nama Anda">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_ktp" class="col-sm-4 col-form-label">No KTP</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="no_ktp" name="no_ktp"
                                placeholder="No KTP">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button type="reset" class="btn btn-primary me-2">Reset</button>
                </form>
            </div>
        </div>  
    </div>
		</section>


    <footer class="ftco-footer ftco-bg-dark ftco-section" id="ft">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><a href="#" class="logo">Rental<span>Mobil</span></a></h2>
              <p>Dapatkan penawaran spesial dan promosi menarik saat ini!.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="about.html" class="py-2 d-block">About</a></li>
                <li><a href="services.html" class="py-2 d-block">Services</a></li>
                <li><a href="blog.html" class="py-2 d-block">Term and Conditions</a></li>
                <li><a href="pricing.html" class="py-2 d-block">Best Price Guarantee</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="contact.html" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Apakah kamu Punya Pertanyaan?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jalan Lenteng Agung Raya No.20 RT.5/RW.1 Lenteng Agung, Srengseng Sawah, Kec. Jagakarsa, Kota Jakarta Selatan,</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+6285 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
     &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Rental Mobil</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>