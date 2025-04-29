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
				
				  @foreach ($menu as $show_menu)

                    <li><a href="{{ route('page_1.index' , [$show_menu->menu_url , $show_menu->id]) }}">{{ $show_menu->menu_name }}</a></li>
                    
                @endforeach
                
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
						    
						        @if($header)
						    
    							<h1>{{ $header->title }}</h1><br>
    							<h2>{{ $header->sub_title }}</h2>
    							
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

    @foreach($package as $show_package)
    
	<section>
		<a>
			<img src="{{ asset('storage/'.$show_package->image) }}" class="img-pages" />
		</a>
		<div class="content">
			<div class="inner">
				<header class="major">
					<h3>{{ $show_package->content_title }}</h3>
				</header>
				<p><b>{{ $show_package->title }} {{ $show_package->sub_title }}</b></p>
				<p><b>{{ $show_package->category_1 }} :</b> {{ $show_package->sub_category_1 }} {{ $show_package->sub_category1_rating }} {{ $show_package->sub_category1_class }}</p>
				<p><b>{{ $show_package->category_2 }} :</b>  {{ $show_package->sub_category_2 }} {{ $show_package->sub_category2_rating }} {{ $show_package->sub_category2_class }}</p>
				<p><b>{{ $show_package->mecca_nights }} nights</b></p>
				<p><b>{{ $show_package->madina_nights }} nights</b></p>
				<p><b>Sharing Rate :  {{ $show_package->sharing_rate }}</b></p>
				<p><b>Quad Rate :  {{ $show_package->quad_rate }}</b></p>
				<p><b>Triple Rate :  {{ $show_package->triple_rate }}</b></p>
				<p><b>Double Rate :  {{ $show_package->double_rate }}</b></p>

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