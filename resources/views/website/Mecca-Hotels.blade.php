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
								<img src="{{ asset('images/HOTELS/Mecca-Banner.jpg') }}" alt="Mecca Banner" />
							</span>
							<header class="major">
							    @if($title)
								    <h1>{{ $title->main_title }}</h1>
								@endif
							</header>
							<div class="content">
							</div>
						</div>
					</section>

   
@endsection


@section('packages')

    <section id="one">
        <header class="major">
        </header>
    </div>
    </section>


    <!-- Two -->
    <section id="two" class="spotlights">
        
            
        
            @foreach($hotels as $show_hotels)
        
                <section>
                    <a>
                        <img src="{{ asset('storage/'.$show_hotels->subcategory_image) }}" class="img-pages" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>{{ $show_hotels->name }}</h3>
                            </header>
                            <p><b>{{ $show_hotels->rating }} </b></p>
                            <p><b>{{ $show_hotels->class }}</b></p>
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