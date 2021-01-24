<!DOCTYPE html>
<html lang="en">
  <head>
    {{-- <link rel="icon" type="image/png" sizes="16x16"  href="{{asset('storage/assets/images/logo.png')}}"> --}}
  
    <title>Farmers Assistance System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('storage/assets/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('storage/assets/css/animate.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('storage/assets/css/fontawesome.css')}}"> --}}
   
   
    <link rel="stylesheet" href="{{asset('storage/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('storage/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('storage/assets/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('storage/assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('storage/assets/css/ionicons.min.css')}}">
    

    <link rel="stylesheet" href="{{asset('storage/assets/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('storage/assets/css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{asset('storage/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('storage/assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('storage/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/assets/css/slick.css')}}">

   
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid px-md-4	">
	      <a class="navbar-brand" href="index.html">FAS</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item "><a href="{{\URL::to('/')}}" class="nav-link">What We Do</a></li>
	          <li class="nav-item"><a href="{{\URL::to('/impacts')}}" class="nav-link">Impacts</a></li>
			  <li class="nav-item"><a href="{{\URL::to('/consultancy')}}" class="nav-link">Consultancy</a></li>
			   
			  <li class="nav-item"><a href="{{\URL::to('/machinery')}}" class="nav-link">Machinery</a></li>
			  
	          <li class="nav-item"><a href="{{\URL::to('/blog')}}" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="{{\URL::to('/contact')}}" class="nav-link">Contact</a></li>
	          <li class="nav-item cta mr-md-1"><a href="{{\URL::to('/hire')}}" class="nav-link">Order</a></li>
	          <li class="nav-item cta cta-colored"><a href="#" class="nav-link">Consultant</a></li>
            <div class="Languages">
              <div class="Language-select">
                <select class="Languages-btns">
                <option value="1"><button class="Language-btn" type="button" value="en-US">ENG</button></option>
                <option value="2"><button class="Language-btn" type="button" value="amh">AMH</button></option>
                <option value="3"><button class="Language-btn" type="button" value="oro">ORO</button></option>
      
                </select>
              </div>
              </div>
	        </ul>
	      </div>
	    </div>
	  </nav>
	<!-- END nav -->
    
    @yield('content')


  


  <!-- footer -->
  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
           <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">FAS</h2>
            <p>Smallholder farmers produce 80% of the world's food. We support resilient and sustainable agriculture systems that benefit and empower vulnerable smallholder farmers and their families.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Quick Links</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="pb-1 d-block">Home</a></li>
              <li><a href="#" class="pb-1 d-block">Consultancy</a></li>
              <li><a href="#" class="pb-1 d-block">Machinery</a></li>
              <li><a href="#" class="pb-1 d-block">Impacts</a></li>
              <li><a href="#" class="pb-1 d-block">Contact Us</a></li>
              </ul>
          </div>
        </div>
     
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Account</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="pb-1 d-block">My Account</a></li>
              <li><a href="#" class="pb-1 d-block">Sign In</a></li>
              
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Bole, Addis Ababa, Ethiopia</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+251 989 985 248</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@fas.werefa.biz</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | FAS.</p>
        </div>
      </div>
    </div>
  </footer>

 
<div id="subscribe" style="display: none;">  
  <div class="subs">
    <div class="container" >
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf683wdPWc7GT5W8iwJVL0BVENNEQy5nzchBzDGPzRni1BygA/viewform?embedded=true" width="640" height="1965" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>

    </div>
    
  </div>
  </div>


  <script async type="text/javascript" src="https://userlike-cdn-widgets.s3-eu-west-1.amazonaws.com/86c8bca65ad02285f157946f20c26e839f20e99bef258629290aca07b5f70891.js"></script>
    
<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>



  <script src="{{asset('storage/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('storage/assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('storage/assets/js/popper.min.js')}}"></script>
  <script src="{{asset('storage/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('storage/assets/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('storage/assets/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('storage/assets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('storage/assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('storage/assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('storage/assets/js/aos.js')}}"></script>
  <script src="{{asset('storage/assets/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('storage/assets/js/scrollax.min.js')}}"></script>
  
  <script src="{{asset('storage/assets/js/slick.min.js')}}"></script>

  <script src="{{asset('storage/assets/js/google-map.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('storage/assets/js/main.js')}}"></script>
          
    </body>
  </html>