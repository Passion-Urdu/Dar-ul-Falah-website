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
                    <li><a href="/Umrah-Info">Umrah Info</a></li>
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
                    <img src="{{ asset('images/HOTELS/Madinah-Banner.jpeg') }}" alt="Madinah Banner" />
                </span>
                <header class="major">
                    <h1>Available</h1>
                    <h1>MADINAH HOTELS</h1>							
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
                <img src="{{ asset('images/Hotels/MEDINAH/DAR AL IMAN INTERCONTINENTAL.jpg') }}" class="img-pages" />
            </a>
            <div class="content">
                <div class="inner">
                    <header class="major">
                        <h3>DAR AL IMAN INTERCONTINENTAL</h3>
                    </header>
                    <p><b>5 STAR HOTEL </b></p>
                    </div>
            </div>
        </section>
        <section>
            <a>
                <img src="{{ asset('images/Hotels/MEDINAH/DAR AL HIJRA INTERCONTINENTAL.jpg') }}" class="img-pages"/>
            </a>
            <div class="content">
                <div class="inner">
                    <header class="major">
                        <h3>DAR AL HIJRA INTERCONTINENTAL</h3>
                    </header>
                    <p><b>5 STAR HOTEL </b></p>
                        </div>
            </div>
        </section>
        <section>
            <a>
                <img src="{{ asset('images/Hotels/MEDINAH/ANWAR AL MADINAH MOVENPICK.jpeg') }}" class="img-pages"/>
            </a>
            <div class="content">
                <div class="inner">
                    <header class="major">
                        <h3>ANWAR AL MADINAH MOVENPICK</h3>
                    </header>
                    <p><b>5 STAR HOTEL </b></p>
                        </div>
            </div>
        </section>
        <section>
            <a>
                <img src="{{ asset('images/Hotels/MEDINAH/TAIBAH FRONT.jpeg') }}" class="img-pages"/>
            </a>
            <div class="content">
                <div class="inner">
                    <header class="major">
                        <h3>TAIBAH FRONT</h3>
                    </header>
                    <p><b>3 STAR HOTEL </b></p>
                        </div>
            </div>
        </section>
        <section>
            <a>
                <img src="{{ asset('images/Hotels/MEDINAH/AL AQEEQ.jpeg') }}" class="img-pages"/>
            </a>
            <div class="content">
                <div class="inner">
                    <header class="major">
                        <h3>AL AQEEQ</h3>
                    </header>
                    <p><b>5 STAR HOTEL </b></p>
                        </div>
            </div>
        </section>
        <section>
            <a>
                <img src="{{ asset('images/Hotels/MEDINAH/SAJA AL MADINAH.jpeg') }}" class="img-pages"/>
            </a>
            <div class="content">
                <div class="inner">
                    <header class="major">
                        <h3>SAJA AL MADINAH</h3>
                    </header>
                    <p><b>5 STAR HOTEL </b></p>
                        </div>
            </div>
        </section>
        <section>
            <a>
                <img src="{{ asset('images/Hotels/MEDINAH/WAQF USMAN.jpeg') }}" class="img-pages"/>
            </a>
            <div class="content">
                <div class="inner">
                    <header class="major">
                        <h3>WAQF OUTHMAN BIN AFFAN</h3>
                    </header>
                    <p><b>3 STAR HOTEL </b></p>
                        </div>
            </div>
        </section>
        <section>
            <a>
                <img src="{{ asset('images/Hotels/MEDINAH/SWISS INTERCONTINENTAL.jpeg') }}" class="img-pages"/>
            </a>
            <div class="content">
                <div class="inner">
                    <header class="major">
                        <h3>SWISS INTERCONTINENTAL</h3>
                        <h4>TABBA AL SALAM</h4>
                    </header>
                    <p><b>3 STAR HOTEL </b></p>
                        </div>
            </div>
        </section>
        <section>
            <a>
                <img src="{{ asset('images/Hotels/MEDINAH/MANAZIL AL MARJAN.jpeg') }}" class="img-pages"/>
            </a>
            <div class="content">
                <div class="inner">
                    <header class="major">
                        <h3>MANAZIL AL MARJAN</h3>
                    </header>
                    <p><b>STAR HOTEL (WITH SHUTLE SERVICE) </b></p>
                        </div>
            </div>
        </section>
            
        <section>
            <a>
                <img src="{{ asset('images/Hotels/MEDINAH/BIR AL EIMAN.jpg') }}" class="img-pages"/>
            </a>
            <div class="content">
                <div class="inner">
                    <header class="major">
                        <h3>BIR AL EIMAN</h3>
                    </header>
                    <p><b>STAR HOTEL </b></p>
            </div>
        </section>
        <section>
            <a>
                <img src="{{ asset('images/Hotels/MEDINAH/TAIF NIBRAS.jpg') }}" class="img-pages"/>
            </a>
            <div class="content">
                <div class="inner">
                    <header class="major">
                        <h3>TAIF NIBRAS</h3>
                    </header>
                    <p><b>STAR HOTEL (200-350 METER)</b></p>
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