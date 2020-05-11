
    

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>X Gym - Fitness HTML Template</title>
    <meta charset="UTF-8">
    <meta name="description" content="X Gym Fitness HTML Template">
    <meta name="keywords" content="fitness, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="{{URL::asset('img/favicon.ico" rel="shortcut icon')}}" />

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/flaticon.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/slicknav.min.css')}}" />

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" />


    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
        <a href="/" class="site-logo">
            <img src="img/logo.png" alt="">
        </a>
        <ul class="main-menu">
            <li><a class="active" href="/">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/classes">Classes</a></li>
            <li><a href="/news">News</a></li>
            <li><a href="/contact">Contact</a></li>
            <li class="header-right">
                <div class="hr-box">
                    <img src="img/location-icon.png" alt="">
                    <h6>1525 Amazing Lane, Los Angeles, CA</h6>
                </div>
            </li>
        </ul>
    </header>
    <div class="clearfix"></div>
	<!-- Header section end -->
	



  
	@yield('footer')
		

	@yield('about')

	@yield('classes')
	@yield('contact')
	 
@yield('news')
	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h4>Location</h4>
						<div class="fw-info-box">
							<img src="img/icons/1.png" alt="">
							<div class="fw-info-text">
								<p>1525  Awesome Lane, Los Angeles, CA</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h4>Subscriptions</h4>
						<div class="fw-info-box">
							<img src="img/icons/2.png" alt="">
							<div class="fw-info-text">
								<p>+1 (603)535-4592</p>
								<p>+1 (603)535-4556</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h4>E-mail</h4>
						<div class="fw-info-box">
							<img src="img/icons/3.png" alt="">
							<div class="fw-info-text">
								<p>Contact@xgym.com</p>
								<p>www.xgym.com</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h4>Social Media</h4>
						<div class="fw-info-box">
							<img src="img/icons/4.png" alt="">
							<div class="social-links">
								<a href="#"><i class="fa fa-pinterest"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 order-2 order-md-1">
					<div class="copyright"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
				</div>
				<div class="col-md-6 order-1 order-md-2">
					<ul class="footer-menu">
						<li><a href="/">Home</a></li>
						<li><a href="/about">About Us</a></li>
						<li><a href="/classes">Classes</a></li>
						<li><a href="/news">News</a></li>
						<li><a href="/contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->
									
	<!--====== Javascripts & Jquery ======-->
	<script src="{{URL::asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('js/jquery.slicknav.js')}}"></script>
	<script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{URL::asset('js/circle-progress.min.js')}}"></script>
	<script src="{{URL::asset('js/main.js')}}"></script>

	</body>
</html>