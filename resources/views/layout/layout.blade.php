<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- site metas -->
      <title> @yield('title')</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
{{--swit aler--}}
       <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
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
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   </head>
   <!-- body -->
   <body class="main-layout">
	<!-- header section start -->
	<div class="header_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="logo"><a href="#"><img src="{{asset('public/home/img/logo.png')}}"></a></div>
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
							<ul>
								@if (Auth::check())
									<li>
										<div class="dropdown">
											<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
											   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fa fa-user"></i> <b>{{ Auth::users()->username }}</b>
											</a>
	
											<div class="dropdown-content">
												<a href="{{ url('#') }}" onclick="return confirm('Bạn có muốn đăng xuất không ?')">Đăng xuất</a>
												<a href="{{url('#')}}">Đổi mật khẩu</a>
												<a href="{{ url('#') }}">Thông tin cá nhân</a>
											</div>
										</div>
									</li>
								@else
									<li><i class="fa fa-sign-in" style="color: white;"></i><a style="color:white;" href="{{ url('page-login') }}"> Log in</a></li>
									<li><i class="fa fa-check-square-o"  style="color: white;"></i><a style="color:white;" href="{{ url('page-signup') }}"> Sign up</a></li>
								@endif
							</ul>
							{{-- <ul style="margin-left: 15px;font-size: 17px;">
								<li><i class="fa fa-sign-in" style="color: white;"></i><a style="color:white;" href="{{ url('page-login') }}"> Log in</a></li>
								<li><i class="fa fa-check-square-o"  style="color: white;"></i><a style="color:white;" href="{{ url('page-signup') }}"> Sign up</a></li>
							</ul> --}}
						</div>
                    </nav>
				</div>
			</div>
		</div>
		<div class="banner_section">
			<div class="container-fluid">
				<section class="slide-wrapper">
    <div class="container-fluid">
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<p class="mens_taital">Men Shoes</p>
						<div class="page_no">0/2</div>
						<p class="mens_taital_2">Men Shoes</p>
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">New Running Shoes </h1>
							<h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
							<p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<button class="buy_bt">Buy Now</button>
							<button class="more_bt">See More</button>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="{{asset('public/home/img/running-shoes.png')}}"></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<p class="mens_taital">Men Shoes</p>
						<div class="page_no">0/2</div>
						<p class="mens_taital_2">Men Shoes</p>
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">New Running Shoes </h1>
							<h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
							<p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<button class="buy_bt">Buy Now</button>
							<button class="more_bt">See More</button>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="{{asset('public/home/img/running-shoes.png')}}"></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<p class="mens_taital">Men Shoes</p>
						<div class="page_no">0/2</div>
						<p class="mens_taital_2">Men Shoes</p>
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">New Running Shoes </h1>
							<h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
							<p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<button class="buy_bt">Buy Now</button>
							<button class="more_bt">See More</button>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="{{asset('public/home/img/running-shoes.png')}}"></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<p class="mens_taital">Men Shoes</p>
						<div class="page_no">0/2</div>
						<p class="mens_taital_2">Men Shoes</p>
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">New Running Shoes </h1>
							<h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
							<p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<button class="buy_bt">Buy Now</button>
							<button class="more_bt">See More</button>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="{{asset('public/home/img/running-shoes.png')}}"></div>
					</div>
				</div>
                </div>
            </div>
        </div>
    </div>
</section>
			</div>
		</div>
	</div>

	<!-- header section end -->
	 @yield('content')
   	<!-- New Arrivals section end -->
   	<!-- contact section start -->

    <div class="layout_padding contact_section">
    	<div class="container">
    		<h1 class="new_text"><strong>Contact Now</strong></h1>
    	</div>
    	<div class="container-fluid ram">
    		<div class="row">
    			<div class="col-md-6">
    				<div class="email_box">
                    <div class="input_main">
                       <div class="container">
                          <form action="/action_page.php">
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Name" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Phone Numbar" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Email" name="Email">
                            </div>

                            <div class="form-group">
                                <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                            </div>
                          </form>
                       </div>
                       <div class="send_btn">
                        <button class="main_bt">Send</button>
                       </div>
                    </div>
    		</div>
    			</div>
    			<div class="col-md-6">
    				<div class="shop_banner">
    					<div class="our_shop">
    						<button class="out_shop_bt">Our Shop</button>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
   	<!-- contact section end -->
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
