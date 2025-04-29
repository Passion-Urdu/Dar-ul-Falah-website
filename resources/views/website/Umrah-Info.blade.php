@extends('website.master-layout')

@section('navbar')

	<!-- Header -->

	<header id="header" class="alt">
		<a href="#banner" class="scrolly"><img src="{{ asset('images/Logo.png') }}" class="logo" alt="Logo"></a> 
		 <nav>
			<a href="#menu">TRAVEL☰</a>
			<a href="/hotels">HOTELS</a>
			<a href="/">HOME</a>
		</nav>
					
		<!-- Menu -->

		<nav id="menu">
			<ul class="links">
				<li><a href="/International">International</a></li>
				<li><a href="/Domestic">Domestic</a></li>
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
                        <header class="major">
                            <h1>UMRAH</h1>
                            <h1>PACKAGES</h1>
                        </header>
                    </div>
                </section>

    
@endsection

@section('packages')

        <!-- One -->
        <section id="one">
            <header class="major">
            </header>
        </div>
    </section>

    <!-- Two -->
    <section id="two" class="spotlights">
        <section>
            <a>
                <img src="{{ asset('images/UmrahInfo/7 days umrah.jpg') }}" class="img-pages" />
            </a>
            <div class="content">
                <div class="inner">
                    <header class="major">
                        <h3>7 DAYS UMRAH PACKAGE</h3>
                    </header>
                    <p><b>For More Info Click Below:</b></p>
                    <ul class="actions">
                        <li><a href="/7-Day-Umrah" class="button">More Details</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <a>
                <img src="{{ asset('images/UmrahInfo/10 days umrah.jpg') }}" class="img-pages" />
            </a>
            <div class="content">
                <div class="inner">
                    <header class="major">
                        <h3>10 DAYS UMRAH PACKAGE</h3>
                    </header>
                    <p><b>For More Info Click Below:</b></p>
                    <ul class="actions">
                        <li><a href="/10-Day-Umrah" class="button">More Details</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <a>
                <img src="{{ asset('images/UmrahInfo/15 days umrah.jpg') }}" class="img-pages"/>
            </a>
            <div class="content">
                <div class="inner">
                    <header class="major">
                        <h3>15 DAYS UMRAH PACKAGE</h3>
                    </header>
                    <p><b>For More Info Click Below:</b></p>
                    <ul class="actions">
                        <li><a href="/15-Day-Umrah" class="button">More Details</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <a>
                <img src="{{ asset('images/UmrahInfo/21 days umrah.jpg') }}" class="img-pages" />
            </a>
            <div class="content">
                <div class="inner">
                    <header class="major">
                        <h3>21 DAYS UMRAH PACKAGE</h3>
                    </header>
                    <p><b>For More Info Click Below:</b></p>
                    <ul class="actions">
                        <li><a href="/21-Day-Umrah" class="button">More Details</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <a>
                <img src="{{ asset('images/UmrahInfo/28 days umrah.jpg') }}" class="img-pages"/>
            </a>
            <div class="content">
                <div class="inner">
                    <header class="major">
                        <h3>28 DAYS UMRAH PACKAGE</h3>
                    </header>
                    <p><b>For More Info Click Below:</b></p>
                    <ul class="actions">
                        <li><a href="/28-Day-Umrah" class="button">More Details</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </section>
    </div>
    <section id="one">
    <header class="major">
    </header>
    </div>
    </section>

@endsection