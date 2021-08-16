<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- site metas -->
      <title> @yield('title')</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('public/home/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/home/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('public/home/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('public/home/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('public/home/img/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('public/home/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="{{asset('public/home/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/home/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

       <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </head>
   <!-- body -->
   <body class="main-layout">
	<!-- header section start -->
	<div class="header_section header_main">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="logo"><a href="{{ url('/') }}"><img src="{{asset('public/home/img/logo.png')}}"></a></div>
				</div>
				<div class="col-sm-9">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
							<div class="navbar-nav">
							   <a class="nav-item nav-link" href="{{ url('/') }}">Home</a>
							   <a class="nav-item nav-link" href="{{ url('page-product') }}">Shop</a>
							   <a class="nav-item nav-link" href="{{ url('page-news') }}">News</a>
							   <a class="nav-item nav-link" href="{{ url('page-contact') }}">Contact</a>
							   <a class="nav-item nav-link" href="{{ url('page-about') }}">About Us</a>
							   <a class="nav-item nav-link last" href="#"><img src="{{asset('public/home/img/search_icon.png')}}"></a>
							   <a class="nav-item nav-link last" href="{{ url('page-cart') }}"><img src="{{asset('public/home/img/shop_icon.png')}}"></a>
							</div>
							<ul style="margin-left: 15px;font-size: 17px;">
								<li><i class="fa fa-sign-in" style="color: white;"></i><a style="color:white;" href="{{ url('page-login') }}"> Log in</a></li>
								<li><i class="fa fa-check-square-o"  style="color: white;"></i><a style="color:white;" href="{{ url('page-signup') }}"> Sign up</a></li>
							</ul>
						</div>
                    </nav>
				</div>
			</div>
		</div>
	</div>
	<!-- header section end -->
	 @yield('content')
   	<!-- New Arrivals section end -->

	<!-- section footer start -->
    <div class="section_footer">
    	<div class="container">
    		<div class="mail_section">
    			<div class="row">
    				<div class="col-sm-6 col-lg-2">
    					<div><a href="#"><img src="{{asset('public/home/img/footer-logo.png')}}"></a></div>
    				</div>
    				<div class="col-sm-6 col-lg-2">
    					<div class="footer-logo"><img src="{{asset('public/home/img/phone-icon.png')}}"><span class="map_text">(71) 1234567890</span></div>
    				</div>
    				<div class="col-sm-6 col-lg-3">
    					<div class="footer-logo"><img src="{{asset('public/home/img/email-icon.png')}}"><span class="map_text">Demo@gmail.com</span></div>
    				</div>
    				<div class="col-sm-6 col-lg-3">
    					<div class="social_icon">
    						<ul>
    							<li><a href="#"><img src="{{asset('public/home/img/fb-icon.png')}}"></a></li>
    							<li><a href="#"><img src="{{asset('public/home/img/twitter-icon.png')}}"></a></li>
    							<li><a href="#"><img src="{{asset('public/home/img/in-icon.png')}}"></a></li>
    							<li><a href="#"><img src="{{asset('public/home/img/google-icon.png')}}"></a></li>
    						</ul>
    					</div>
    				</div>
    				<div class="col-sm-2"></div>
    			</div>
    	    </div>
    	    <div class="footer_section_2">
		        <div class="row">
                        <div class="col-sm-4 col-lg-2">
                            <p class="dummy_text"> ipsum dolor sit amet, consectetur ipsum dolor sit amet, consectetur  ipsum dolor sit amet,</p>
                        </div>
    		        <div class="col-sm-4 col-lg-2">
    		        	<h2 class="shop_text">Address </h2>
    		        	<div class="image-icon"><img src="{{asset('public/home/img/map-icon.png')}}"><span class="pet_text">No 40 Baria Sreet 15/2 NewYork City, NY, United States.</span></div>
    		        </div>
    		        <div class="col-sm-4 col-md-6 col-lg-3">
    				    <h2 class="shop_text">Our Company </h2>
    				    <div class="delivery_text">
    				    	<ul>
    				    		<li>Delivery</li>
    				    		<li>Legal Notice</li>
    				    		<li>About us</li>
    				    		<li>Secure payment</li>
    				    		<li>Contact us</li>
    				    	</ul>
    				    </div>
    		        </div>
    			<div class="col-sm-6 col-lg-3">
    				<h2 class="adderess_text">Products</h2>
    				<div class="delivery_text">
    				    	<ul>
    				    		<li>Prices drop</li>
    				    		<li>New products</li>
    				    		<li>Best sales</li>
    				    		<li>Contact us</li>
    				    		<li>Sitemap</li>
    				    	</ul>
    				    </div>
    			</div>
    			<div class="col-sm-6 col-lg-2">
    				<h2 class="adderess_text">Newsletter</h2>
    				<div class="form-group">
                        <input type="text" class="enter_email" placeholder="Enter Your email" name="Name">
                    </div>
                    <button class="subscribr_bt">Subscribe</button>
    			</div>
    			</div>
    	        </div>
	        </div>
    	</div>
    </div>
	<!-- section footer end -->
	<div class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html  Templates</a></div>


      <!-- Javascript files-->
      <script src="{{asset('public/home/js/jquery.min.js')}}"></script>
      <script src="{{asset('public/home/js/popper.min.js')}}"></script>
      <script src="{{asset('public/home/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('public/home/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('public/home/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('public/home/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('public/home/js/custom.js')}}"></script>
      <!-- javascript -->
      <script src="{{asset('public/home/js/owl.carousel.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function(){
        $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
        });


        $('#myCarousel').carousel({
           interval: false
       });

       //scroll slides on swipe for touch enabled devices

       $("#myCarousel").on("touchstart", function(event){

           var yClick = event.originalEvent.touches[0].pageY;
           $(this).one("touchmove", function(event){

               var yMove = event.originalEvent.touches[0].pageY;
               if( Math.floor(yClick - yMove) > 1 ){
                   $(".carousel").carousel('next');
               }
               else if( Math.floor(yClick - yMove) < -1 ){
                   $(".carousel").carousel('prev');
               }
           });
           $(".carousel").on("touchend", function(){
               $(this).off("touchmove");
           });
       });
     </script>
   </body>
</html>
