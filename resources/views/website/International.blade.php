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
                <li><a href="/Umrah-Info">Umrah Info</a></li>
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
                            <img src="{{ asset('images/pic02.jpg') }}" alt="" />
                        </span>
                        <header class="major">
                            <h1>INTERNATIONAL</h1>
                            <h1>PACKAGES</h1>
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
    <section>
        <a>
            <img src="{{ asset('images/International/1.jpg') }}" class="img-pages" alt="BAKU"/>
        </a>
        <div class="content">
            <div class="inner">
                <header class="major">
                    <h3>BAKU</h3>
                    <p>Contact for further details..</p>
                </header>
            </div>
        </div>
    </section>
    <section>
        <a>
            <img src="{{ asset('images/International/2.jpeg') }}" class="img-pages" alt="DUBAI"/>
        </a>
        <div class="content">
            <div class="inner">
                <header class="major">
                    <h3>DUBAI</h3>
                    <p>Contact for further details..</p>										
                </header>
            </div>
        </div>
    </section>
    <section>
        <a>
            <img src="{{ asset('images/International/3.jpg') }}" class="img-pages" alt="TURKEY"/>
        </a>
        <div class="content">
            <div class="inner">
                <header class="major">
                    <h3>TURKEY</h3>
                    <p>Contact for further details..</p>										
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