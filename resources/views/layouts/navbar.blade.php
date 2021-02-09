<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>TechnoBrain</title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('css/front_page/linearicons.css')}}">
	<link rel="stylesheet" href="{{asset('css/front_page/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/front_page/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/front_page/magnific-popup.css')}}">				
	<link rel="stylesheet" href="{{asset('css/front_page/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('css/front_page/hexagons.min.css')}}">			
	<link rel="stylesheet" href="{{asset('css/front_page/main.css')}}">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	@yield('head')

	<style type="text/css">
		html {
			scroll-behavior: smooth;
			overflow-x: hidden;
		}
		body {
			/*overflow-x: hidden;*/
			position: relative;
		}

		li {
			list-style-type: none;
		}

		/*#page1 {
			animation: fadein 10s;
		}

		@keyframes fadein {
    	from { opacity: 0; }
    	to   { opacity: 1; }
		}*/
		img {
			display: block;
			margin-left: auto;
			margin-right: auto
		}
		.no-js #loader { display: none;  }
		.js #loader { display: block; position: absolute; left: 100px; top: 0; }
		.se-pre-con {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 9999;
			background: url({{asset('Preloader_2.gif')}}) center no-repeat #fff;
		}
		.dropdown:hover .dropdown-menu {
    	display: block;
    	margin-top: 0; // remove the gap so it doesn't close
		}

	</style>
	</head>
	<body>
		<div class="se-pre-con"></div>
		<!-- start banner Area -->
		<section class="banner-area" id="home">
		<!-- Start Header Area -->
		<header class="default-header">
			<nav class="navbar navbar-expand-lg  navbar-light" style="background-color: #300D41;">
				<div class="container">
					  <li>
					  <a class="navbar-brand" href="{{url('/')}}">
					  	<img src="{{asset('logo.png')}}" height="40" alt="">
					  </a>
					  </li>
					  <li>
					  <a href="#" style="color: white">TECHNOBRAIN</a>
					  </li>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="fa fa-bars"></span>
					  </button>

					  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
					    <ul class="navbar-nav" >
							<li><a href="{{url('/')}}">Home</a></li>
							<li>
								<div class="dropdown show">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Menu
									</a>

									<div class="dropdown-menu" style="background-color: #300D41" aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="#">English for Childrens (EC)</a>
										<a class="dropdown-item" href="#">English for Teens (ET)</a>
										<a class="dropdown-item" href="#">English for Adults (EA)</a>
										<a class="dropdown-item" href="#">Conversation in English (CV)</a>
										<a class="dropdown-item" href="#">TOEFL PREPARATION (TP)</a>
										<a class="dropdown-item" href="#">TOEIC PREPARATION</a>
										<a class="dropdown-item" href="#">IELTS PREPARATION (IP)</a>
										<a class="dropdown-item" href="#">Business Conversation (BC)</a>
										<!-- <a class="dropdown-item" href="#">Another action</a> -->
										<!-- <a class="dropdown-item" href="#">Something else here</a> -->
									</div>
								</div>
							</li>
							<li><a href="#">About</a></li>
							<li><a href="#">Login</a></li>
							<!-- <li><a href="generic.html">Contact Us</a></li>	 -->						
					    </ul>
					  </div>						
				</div>
			</nav>
		</header>
		<!-- End Header Area -->				
			@yield('page1')
			
		<!-- End banner Area -->	

		<!-- Start cat Area -->
		<!-- <section class="cat-area section-gap" id="service">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-60 col-lg-8">
						<div class="title text-center">
							<h1 class="mb-10">This how the things work</h1>
							<p>There are 4 important roles inside Dipena</p>
						</div>
					</div>
				</div>							
				<div class="row">
					<div class="col-lg-3">	
						<div class="single-cat d-flex flex-column">
							<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-camera"></span></span></a>
							<h4 class="mb-20" style="margin-top: 23px;">Photographer</h4>
							<p>
								Take a shot, and posted it on Dipena. Show your skills, show your shots to the world. Show all your results in Dipena, and business
								will come to ask your for collaboration.
							</p>
						</div>															
					</div>
					<div class="col-lg-3">	
						<div class="single-cat">
							<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-camera-video"></span></span></a>
							<h4 class="mt-40 mb-20">Videographer</h4>
							<p>
								Short or long video. The important things is start uploading the things up to Dipena. Business need to documentating
								their progress / event, then they call you.
							</p>
						</div>															
					</div>
					<div class="col-lg-3">	
						<div class="single-cat">
							<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-pencil"></span></span></a>
							<h4 class="mt-40 mb-20">Designer</h4>
							<p>
								Every social media content need Designer, and that's when you come to help. Show your art, show your skills. Business
								will need you, and find you on Dipena.
							</p>
						</div>															
					</div>
					<div class="col-lg-3">
						<div class="single-cat">
							<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-store"></span></span></a>
							<h4 class="mt-40 mb-20">Business</h4>
							<p>
								Business people, start to think this way. You need them so much. Improve your business, it's digital world right now.
								Find collaboration on Dipena.
							</p>
						</div>							
					</div>
				</div>
			</div>	
		</section> -->
		@yield('anotherPage')
		<!-- End cat Area -->
		

		<!-- Start about Area -->
		<!-- <section class="about-area section-gap">
			<div class="container">
				<div class="row justify-content-center align-items-center d-flex">
					<div class="col-lg-6 about-left">
						<h1>
							We Believe that <br>
							Business can be improved <br>
							By this way
						</h1>
						<p class="mt-20"> 
							Dipena come to provide you (business) a solution. It's good to do things DIY (Do It Yourself), but not good for the quality. It's not
							the matter a money, because it's give you value. Find the perfect person to do collaboration to you. On the other side, for Photographer,
							Videographer, and Designer, this is your place. 
						</p>
						<a href="#" class="btn primary-btn text-uppercase mt-20">download dipena now</a>
					</div>
					<div class="col-lg-6 about-right">
						<img class="img-fluid" src="img/about-img-1.png" alt="">
					</div>
				</div>
			</div>	
		</section> -->
		<!-- Start Video Area -->
		<!-- End call-to-action Area -->
		

		<!-- start footer Area -->		
		<footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="single-footer-widget">
							<h6>Main Menu</h6>
							<ul class="footer-nav">
								<li><a href="{{url('/')}}">Home</a></li>
								<li><button onclick="learnMore()" style="border: none; background: none; color: white; padding: 0;" href="#service">Learn More</button></li>
								<!-- <li><a href="#video">Watch Us</a></li> -->
								<!-- <li><a href="#download">Download</a></li> -->
								<li><a href="#">Register</a></li>
								<li><a href="#">Admin</a></li>
							</ul>	
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="single-footer-widget newsletter">
							<h6>Contact Us</h6>
							<ul class="footer-nav">
								<li><a href="mailto:lia@gmail.com">halo@technobrain.net</a></li>
								<li><a href="https://www.facebook.com/Dipena-106280711184628/">Facebook</a></li>
								<li><a href="https://twitter.com/dipena_id">Twitter</a></li>
								<li><a href="https://www.instagram.com/dipena.id/">Instagram</a></li>
							</ul>	
						</div>
					</div>
										
				</div>

				<div class="row footer-bottom d-flex justify-content-between">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | TechnoBrain</i></p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					<div class="col-lg-4 col-sm-12 footer-social">
						<a href="https://www.instagram.com/dipena.id/"><i class="fa fa-instagram"></i></a>
						<a href="https://www.facebook.com/Dipena-106280711184628/"><i class="fa fa-facebook"></i></a>
						<a href="https://twitter.com/dipena_id"><i class="fa fa-twitter"></i></a>	
					</div>
				</div>
			</div>
		</footer>
		<div id="loading"></div>
		<!-- End footer Area -->		

		<script src="{{asset('js/front_page/vendor/jquery-2.2.4.min.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="{{asset('js/front_page/vendor/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/front_page/jquery.ajaxchimp.min.js')}}"></script>
		<script src="{{asset('js/front_page/jquery.magnific-popup.min.js')}}"></script>				
		<script src="{{asset('js/front_page/parallax.min.js')}}"></script>			
		<script src="{{asset('js/front_page/owl.carousel.min.js')}}"></script>			
		<script src="{{asset('js/front_page/jquery.sticky.js')}}"></script>
		<script src="{{asset('js/front_page/hexagons.min.js')}}"></script>
		<script src="{{asset('js/front_page/jquery.counterup.min.js')}}"></script>
		<script src="{{asset('js/front_page/waypoints.min.js')}}"></script>				
		<script src="{{asset('js/front_page/main.js')}}"></script>
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script type="text/javascript">
			$(window).load(function() {
		// Animate loader off screen
			$(".se-pre-con").fadeOut("slow");;
			});
			AOS.init();
			function scrollWin() {
 			window.scrollBy(0, 615);
			}
			function learnMore() {
 			window.scrollBy(0, -2045);
			}
		</script>
	</body>
</html>