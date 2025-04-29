@extends('website.master-layout')

@section('navbar')

    <!-- Header -->
	<header id="header" class="alt">
		<a href="#banner" class="scrolly"><img src="{{ asset('images/Logo.png') }}" class="logo" alt="Logo"></a> 
		<nav>
			<a href="#menu">UMRAH☰</a>
			<a href="{{ route('hotel.index') }}">HOTELS</a>
			<a href="{{ route('home.index') }}">HOME</a>
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
					<img src="{{ asset('images/Hotels/Hotels.jpg') }}" alt="" />
				</span>
				<br>
				<header class="major">
				    
				    @if($title)
					<h1>{{ $title->main_title }}</h1>
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


@section('packages')

	<!-- Pakages -->
	<section id="two" class="spotlights">
	    
	    @foreach( $category as $categories)
	    
		<section>
			<a>
				<img src="{{ asset('storage/'.$categories->category_image) }}" class="img-pages" />
			</a>
			<div class="content">
				<div class="inner">
					<h2>{{ $categories->name }}</h2>
				</header>
				<p><b>To See Available Hotels Click Below:</b></p>
				<ul class="actions">
					<li><a href="{{ route('hotel.show' , $categories->id) }}" class="button">View</a></li>
				</ul>
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