<!DOCTYPE HTML>

<html lang="en">
	<head>
		<title>Dar-ul-Falah International™️ - Avail the Best Umrah & Hajj Packages.</title>
		
		<!-- SEO Meta Tags-->
	    <meta name="description" content="Explore the best Umrah & Hajj packages with Dar-ul-Falah International - Affordable rates and exceptional service for a memorable journey.">
		
		<!-- Domain Meta Tags-->
		<meta name="facebook-domain-verification" content="oyumzfisu2jwtb87x3ttg59uxcmare" />

		<!-- Favicon  -->
		<link rel="icon" href="{{ asset('images/Favicon.png') }}">

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

		<link rel="apple-touch-icon" href="{{ asset('images/Logo.png') }}">
		
		<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/moving-banner.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/reviews.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/pakages-slider.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/tiles-banner.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/wide-card.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/services-section.css') }}" />

		<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>

<!-- Meta Pixel Code -->
<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '858229675889319');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=858229675889319&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Meta Pixel Code -->
	 
	<!-- Google tag (gtag.js) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-WXX55SRG0Q"></script>
   <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());

   gtag('config', 'G-WXX55SRG0Q');
   </script>

	</head>

	<body class="is-preload">
	
		@yield('Package-Calculator')

		<!-- Wrapper -->

			<div id="wrapper">


				@yield('navbar')
						
				@yield('banner')
			
				@yield('scroll-banner')

				@yield('review-banner')

		
				
			
<!-- Main -->

<div id="main">


		@yield('widecard-package')

		@yield('pakage-slider')

		@yield('colorful-banner')
  
		@yield('widecard-ticket')

		@yield('services-section')

		@yield('whastapp-scrolling')

		@yield('packages')

  

				<footer id="footer">
					<div class="inner-footer">
						<div class="footer-left">
							<ul class="contact-method">
								<li>
									<a href="https://maps.google.com/?q=31.551498,74.335350" class="icon solid alt fa-map-marker-alt" target="_blank"><span class="label">Google Map</span></a>
									<span>Race Course Road, Lahore, Pakistan</span>
								</li>
								<li>
									<a href="tel:+923237775858" class="icon solid alt fa-phone"><span class="label">Phone</span></a>
									<span>+92-323-7775858 / +92-323-9998881</span>
								</li>
							</ul>
						</div>
						<div class="footer-right">
							<img src="{{ asset('images/IATA.png') }}" alt="Center Image" />
						</div>
					</div>
					<div class="footer-bottom">
						<ul class="icons">
							<li><a href="https://www.facebook.com/darulfla" class="icon brands alt fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/_darulfalah_/?hl=en" class="icon brands alt fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
						</ul>
						<ul class="copyright">
							<li class="p-small">2024 © All Rights Reserved. (Pvt) Ltd</li>
						</ul>
					</div>
				</footer>
				
						
		<!-- Scripts -->
			<script src="{{ asset('js/jquery.min.js') }}"></script>
			<script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('js/browser.min.js') }}"></script>
			<script src="{{ asset('js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('js/util.js') }}"></script>
			<script src="{{ asset('js/main.js') }}"></script>
			<script src="{{ asset('js/review.cards.js') }}"></script>
			<script src="{{ asset('js/pakages-slider.js') }}"></script>
			<script src="{{ asset('js/services-section.js') }}"></script>

	</body>
</html>