@extends('website.master-layout')

@section('navbar')

    <!-- Header -->

	<header id="header" class="alt">
		<a href="#banner" class="scrolly"><img src="{{ asset('images/Logo.png') }}" class="logo" alt="Logo"></a> 
		<nav>
			<a href="#menu">UMRAH☰</a>
			<a href="/hotels">HOTELS</a>
			<a href="/">HOME</a>
		</nav>
		
		<!-- Menu -->
		<nav id="menu">
			<ul class="links">
				<li><a href="/7-Day-Umrah">7 Days Umrah</a></li>
				<li><a href="/10-Day-Umrah">10 Days Umrah</a></li>
				<li><a href="/15-Day-Umrah">15 Days Umrah</a></li>
				<li><a href="/21-Day-Umrah">21 Days Umrah</a></li>
				<li><a href="/28-Day-Umrah">28 Days Umrah</a></li>
			</ul>
		</nav>

	</header>
    
@endsection


@section('banner')

	<!-- Banner -->
				<!-- Note: The "styleN" class below should match that of the header element. -->
				<section id="banner" class="style2">
					<div class="inner">
						<span class="image">
							<img src="{{ asset('images/HomePage/Banner.jpg') }}" alt="" />
						</span>
						<br>
						<header class="major">
						    
						    @if($single_record)
						    
							<h1>{{ $single_record->title }}</h1>
							<h2>{{ $single_record->sub_title }}</h2>
							
							@endif
						</header>
						<div class="content">
						</div>
					</div>
				</section>


				<section id="one">
						<header class="major">
						</header>
					</div>
				</section>


@endsection


@section('pakage-slider')

	<!-- Pakage Slider -->
					
	<div class="carousel" id="pakages">
		<ul class="slides">
	
			<!-- Slide 1 -->
			<input type="radio" name="carousel" id="img-1" checked>
			<li class="slide-container">
				<div class="slide-image">
						<img src="{{ asset('images/Pakages Hotels/1.jpg') }}" alt="Umrah Package 1">
				</div>
			</li>
	
	
			<!-- Slide 2 -->
			<input type="radio" name="carousel" id="img-2">
			<li class="slide-container">
				<div class="slide-image">
						<img src="{{ asset('images/Pakages Hotels/2.jpg') }}" alt="Umrah Package 2">
				</div>
			</li>
	
	
			<!-- Slide 3 -->
			<input type="radio" name="carousel" id="img-3">
			<li class="slide-container">
				<div class="slide-image">
						<img src="{{ asset('images/Pakages Hotels/3.jpg') }}" alt="Umrah Package 3">
				</div>
			</li>

			<!-- Slide 4 -->
			<input type="radio" name="carousel" id="img-4">
			<li class="slide-container">
				<div class="slide-image">
						<img src="{{ asset('images/Pakages Hotels/4.jpg') }}" alt="Umrah Package 3">
				</div>
			</li>

			<!-- Slide 5 -->
			<input type="radio" name="carousel" id="img-5">
			<li class="slide-container">
				<div class="slide-image">
						<img src="{{ asset('images/Pakages Hotels/5.jpg') }}" alt="Umrah Package 3">
				</div>
			</li>
		</ul>
	
	
	
		<!-- Navigation Dots -->
		<div class="carousel-dots">
			<span class="carousel-dot active" data-slide="1"></span>
			<span class="carousel-dot" data-slide="2"></span>
			<span class="carousel-dot" data-slide="3"></span>
			<span class="carousel-dot" data-slide="4"></span>
			<span class="carousel-dot" data-slide="5"></span>

		</div>
	</div>
	</div>
				</div>			
	<!-- End of Pakage Slider -->
	
@endsection

@section('packages')

   <!-- Pakages -->
   <section id="two" class="spotlights">
	@foreach ($show as $show_package)

	<section>
		<a>
			<img src="{{ asset('public/storage/'.$show_package->image) }}" class="img-pages" />
		</a>
		<div class="content">
			<div class="inner">
				<header class="major">
					<h3>{{ $show_package->content_title}}</h3>
				</header>
				<p><b>{{ $show_package->title}} {{$show_package->sub_title}}</b></p>
				<p><b>{{ $show_package->cate1_name}} :</b> {{ $show_package->subcate1_name}} {{ $show_package->subcate1_rating}} {{ $show_package->subcate1_distance." meters"}}</p>
				<p><b>{{ $show_package->cate2_name}} :</b> {{ $show_package->subcate2_name}} {{ $show_package->subcate2_rating}} {{ $show_package->subcate2_distance." meters"}}</p>
				<p><b>{{ $show_package->mecca_nights.' Nights'}}</b></p>
				<p><b>{{ $show_package->madina_nights.' Nights'}}</b></p>
				<p><b>{{'QUINT SHARING: '.$show_package->sharing_rate}} </b></p>
				<p><b>{{'QUAD SHARING: '.$show_package->quad_rate}} </b></p>
				<p><b>{{'TRIPLE SHARING: '.$show_package->triple_rate}} </b></p>
				<p><b>{{'DOUBLE SHARING: '.$show_package->double_rate}} </b></p>

			</div>
		</div>
	</section>

	@endforeach
	
</section>
</div>
<section id="one">
<header class="major">
</header>
</div>
</section>
	
@endsection