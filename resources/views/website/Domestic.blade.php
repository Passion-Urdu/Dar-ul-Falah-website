@extends('website.master-layout')

@section('navbar')

	<!-- Header -->
    <header id="header" class="alt">
        <a href="#banner" class="scrolly"><img src="{{ asset('images/Logo.png') }}" class="logo" alt="Logo"></a> 
        <nav>
            <a href="#menu">TRAVEL☰</a>
            <a href="/hotels">HOTELS</a>
            <a href="/" class="scrolly">HOME</a>
        </nav>
        
        <!-- Menu -->
        <nav id="menu">
            <ul class="links">
                <li><a href="/Umrah-Info">Umrah Info</a></li>
                <li><a href="/International">International</a></li>
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
                            <img src="{{ asset('images/Domestic/Banner.jpg') }}" alt="" />
                        </span>
                        <br>
                        <header class="major">
                            <h1>Domestic</h1>
                            <h1>Packages</h1>
                        </header>
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
        <section>
            <a>
                <img src="{{ asset('images/Domestic/HUNZA.jpg') }}" class="img-pages" />
            </a>
            <div class="content">
                <div class="inner">
                    <header class="major">
                        <h3>Coming Soon...</h3>
                    </header>
                </div>
            </div>
        </section>
        <section>
            <a>
                <img src="{{ asset('images/Domestic/KUMRAT.jpg') }}" class="img-pages"/>
            </a>
            <div class="content">
                <div class="inner">
                    <header class="major">
                        <h3>Coming Soon...</h3>
                    </header>
                </div>
            </div>
        </section>
        <section>
            <a>
                <img src="{{ asset('images/Domestic/SHANGRILA.jpg') }}" class="img-pages" />
            </a>
            <div class="content">
                <div class="inner">
                    <header class="major">
                        <h3>Coming Soon...</h3>
                    </header>
                </div>
            </div>
        </section>
        <section>
            <a>
                <img src="{{ asset('images/Domestic/NARAN.jpg') }}" class="img-pages" />
            </a>
            <div class="content">
                <div class="inner">
                    <header class="major">
                        <h3>Coming Soon...</h3>
                    </header>
                </div>
            </div>
        </section>
        <section>
            <a>
                <img src="images/Domestic/SAWAT.jpg" class="img-pages" />
            </a>
            <div class="content">
                <div class="inner">
                    <header class="major">
                        <h3>Coming Soon...</h3>
                    </header>
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