<!DOCTYPE HTML>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Road Trip</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href='/'><font color="orange">Road Trip</font> </a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
			
				<li class="{{Request::path()=='/'? 'current_page_item' : ''}}"><a href="/"accesskey="1"title="">Welcome</a></li>
				   <li class="{{Request::path()=='about'? 'current_page_item' : ''}}"><a href="/about"accesskey="2"title="">About Us</a></li>
					<li class="{{Request::path()=='Articles'? 'current_page_item': ''}}"><a href="/Articles"accesskey="3"title="">View Artircles</a></li>
					<li class="{{Request::path()=='RequestQoute'? 'current_page_item': ''}}"><a href="/RequestQoute"accesskey="4"title="">Request A Qoute</a></li>
					<li class="{{Request::path()=='YourReview'? 'current_page_item': ''}}"><a href="/YourReview"accesskey="5"title="">Edit review Review</a></li>

					
				</ul>
			</nav>

		<!-- Banner -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
		@yield('Content')
<!-- Footer -->
<footer id="footer">
				<div class="inner">
					<ul class="icons">
					
						<li><a href="#" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>
					<div class="copyright">
<<<<<<< HEAD
						&copy; Short Left: <a href='/about'>SA Template</a>. Images: <a href='/about'>SA template</a>.
=======
						&copy; Short Left: <a href="https://templated.co">SA Template</a>. Images: <a href="https://unsplash.com">SA template</a>.
>>>>>>> 44a3dd42e1170e914f77d99e8a8b15807725c4b0
					</div>

				</div>
			</footer>
	

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>