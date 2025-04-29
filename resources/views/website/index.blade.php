@extends('website.master-layout')

@section('navbar')

    <!-- Navbar -->

    <header id="header" class="alt">
        <a href="#banner" class="scrolly"><img src="{{ asset('images/Logo.png') }}" class="logo" alt="Logo"></a> 
        <nav>
            <a href="#menu">UMRAH☰</a>
            <a href="{{ route('hotel.index') }}">HOTELS</a>
            <a href="#banner" class="scrolly">HOME</a>
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

    <section id="banner" class="major" style="background-image: url('{{ asset('images/HomePage/Banner.jpg') }}'); background-size: cover; background-position: center;">
        <div class="inner">
            <header>
                <br>
                <br>
                <h1 id="heading1">DAR-ul-FALAH</h1> 
                <h3>International Travels & Tours Pvt. (Ltd)</h3>
                <br>
                <br>
                <p><b>Begin your sacred journey with us. We take care of every detail of your Umrah and Hajj, ensuring a smooth and enriching experience. Let us guide you with professionalism and heartfelt care. Trust us to make your pilgrimage special.</b></p>
                <br>
                <br>
                <ul class="actions">
                    <li><a href="#scrollbanner" class="button next scrolly">Explore</a></li>
                </ul>
            </header>
        </div>
    </section>
    
@endsection


@section('scroll-banner')

    <!-- Scroll Banner -->

    <div class="banner" id= 'scrollbanner'>
        <div class="scrolling-text">
            <h6>Explore the best Umrah packages with Dar-ul-Falah International - Affordable rates and exceptional service for a memorable journey.</h6>
        </div>
    </div>
    
@endsection


@section('review-banner')

    <!-- Review Banners -->

    <div class="review-slider" id="reviews">
        <h2 style="text-align: center;">ضُیُوْفُ الرَّحْمٰنْ</h2>
        <h5 style="text-align: center;">Sharing Their Experiences</h5>
        <button class="arrow arrow-left" onclick="slideLeft()">&#10094;</button>
        <div class="review-cards-container" id="review-cards-container">
            <div class="review-card">
                <img class="review-img" src="{{ asset('images/Reviews/Hassan Arif.jpg') }}" alt="Reviewer 1">
                <div class="review-content">
                    <div class="reviewer-card-name">Hassan Arif</div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                    <div class="review-text">"It was a wonderful experience to perform Umrah through Dar ul Falah Travel. They handled everything very professionally, from booking the hotel to arranging the air tickets. They also stayed in touch with me throughout the Umrah journey and promptly resolved any issues that arose."</div>
                </div>
            </div>
            <div class="review-card">
                <img class="review-img" src="{{ asset('images/Reviews/Dr.Haris.jpg') }}" alt="Reviewer 2">
                <div class="review-content">
                    <div class="reviewer-card-name">Dr. Haris Qureshi</div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                    <br>
                    <div class="review-text">"It was a remarkable & memorable umrah trip with my friends organised by Dar-Ul-Falah. Everything was planned properly and in good manners. Me & my friends are more than satisfied with the services of Dar-ul-Falah."</div>
                </div>
            </div>
            <div class="review-card">
                <img class="review-img" src="{{ asset('images/Reviews/Muhammad Iftikhar.jpg') }}" alt="Reviewer 7">
                <div class="review-content">
                    <div class="reviewer-card-name">Muhammad Iftikhar</div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                    <br>
                    <div class="review-text">میری پہلی عمرہ کی زیارت 'دار الفلاح' کے ذریعے منعقد کی گئی تھی جو واقعی ایک بابرکت تجربہ تھا۔ ہر چیز اتنی عمدگی سے منظم تھی کہ میں بے فکری سے اپنی عبادت پر توجہ مرکوز کر سکا۔ میں یقیناً دوسروں کو مشورہ دوں گا کہ وہ اپنے عمرہ کے سفر کے لیے 'دار الفلاح' کا انتخاب کریں۔</div>
                </div>
            </div>
            <div class="review-card">
                <img class="review-img" src="{{ asset('images/Reviews/Ghulam Mujtaba Butt.JPG') }}" alt="Reviewer 7">
                <div class="review-content">
                    <div class="reviewer-card-name">Ghulam Mujtaba - (U.K)</div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                    <div class="review-text">"Me and my family had an amazing Umrah experience with Dar-ul-Falah. The location of our accommodation was convenient and the services offered were excellent. Everything we agreed beforehand was considered and delivered to a high standard. I would highly recommend."</div>
                </div>
            </div>
            <div class="review-card">
                <img class="review-img" src="{{ asset('images/Reviews/Adv. Nasir Abbas.jpg') }}" alt="Reviewer 7">
                <div class="review-content">
                    <div class="reviewer-card-name">Adv. Syed Nasir Abbas</div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                    <br>
                    <div class="review-text">"Zarar Sahab is running Dar-ul-Falah Travels. We travelled to Hejaz-e-Muqadasa to perform Umrah through Zarar Sahab. We found our journey and stay quite comfortable thanks to him."</div>
                </div>
            </div>
            <div class="review-card">
                <img class="review-img" src="{{ asset('images/Reviews/Ahmed Shahid.jpg') }}" alt="Reviewer 5">
                <div class="review-content">
                    <div class="reviewer-card-name">Ahmed Shahid</div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                    <br>
                    <div class="review-text">"We booked our umrah with Dar Al falah. Our experience overall was 5 Star. Hotels were clean, comfortable and close to haram. Every facility provided was according to commitment .We will book again InshaAllah. Recommended 👍"</div>
                </div>
            </div>
            <div class="review-card">
                <img class="review-img" src="{{ asset('images/Reviews/') }}" alt="Reviewer 6">
                <div class="review-content">
                    <div class="reviewer-card-name">Saad Mohyuddin</div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                    <br>
                    <div class="review-text">"I had an incredible experience with Darufalah. They planned everything perfectly, making my trip comfortable and stress-free. Their service was excellent. I highly recommend them to family and friends."</div>
                </div>
            </div>
            <div class="review-card">
                <div class="review-content">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="reviewer-card-name">And Many More...</div>
                </div>
            </div>
            <!-- Add more review cards as needed -->
        </div>
        <button class="arrow arrow-right" onclick="slideRight()">&#10095;</button>
    </div>
    
@endsection



@section('widecard-package')

    <!-- Wide Card Package Builder -->

    <div class="services-section-wide-card" id="package-card">
        <div class="oval-card">
            <div class="gif-container">
                <img src="{{ asset('images/Services/calculator.gif') }}" alt="Animated GIF">
            </div>
            <div class="separator"></div>
            <div class="text-container">
            <h4>Create Your Own</h4>
            <h3>Package</h3>
            <a href="{{ route('packages.index') }}" class="create-package-button">CREATE</a>
        </div>
        </div>
    </div>
    
@endsection



@section('pakage-slider')

    <!-- Pakage Slider -->

    <div class="carousel" id="pakages">

        <ul class="slides">

            @foreach ($slide as $show_slide)

            <!-- Slides -->

                <input type="radio" name="carousel" id="img-{{ $loop->index + 1 }}" checked>

                <li class="slide-container">
                    <div class="slide-image">
                            <img src="{{ asset('storage/'.$show_slide->image) }}" alt="Umrah Package 1">
                    </div>
                </li>
                
            @endforeach
            

        </ul>


        <!-- Navigation Dots -->

        <div class="carousel-dots">

            @foreach ($slide as $show_slide)

                <span class="carousel-dot active" data-slide="{{ $loop->index + 1 }}"></span>
                
            @endforeach
            
           
        </div>

        
    </div>
    </div>
                </div>			
    <!-- End of Pakage Slider -->
    
@endsection


@section('colorful-banner')

    <!-- Colourful Banner -->
                            
    <section id="one" class="tiles">
        <article>
            <span class="image">
                <img src="{{ asset('images/HomePage/Umrah.jpg') }}" alt="Umrah Hotels" />
            </span>
            <header class="major">
                <h3><a href="/Umrah-Info" class="link">UMRAH PACKAGES</a></h3>
                <p>AVAIL BEST RATES FOR UMRAH</p>
            </header>
        </article>
        <article>
            <span class="image">
                <img src="{{ asset('images/HomePage/hotels.jpg') }}" alt="" />
            </span>
            <header class="major">
                <h3><a href="/hotels" class="link">UMRAH HOTELS</a></h3>
                <p>BEST RATES FOR HOTELS</p>
                </header>
        </article>
        <article>
            <span class="image">
                <img src="{{ asset('images/HomePage/International.jpg') }}" alt="International Travel Packages" />
            </span>
            <header class="major">
                <h3><a href="/International" class="link">INTERNATIONAL TOURS</a></h3>
                <p>VISIT YOUR DREAM DESTINATION</p>
            </header>
        </article>
        <article>
            <span class="image">
                <img src="{{ asset('images/HomePage/Domestic.jpg') }}" alt="" />
            </span>
            <header class="major">
                <h3><a href="/Domestic" class="link">DOMESTIC TOURS</a></h3>
                <p>EXPERIENCE THE BEAUTY OF PAKISTAN</p>
            </header>
        </article>
    </section>
    </div>
        
@endsection


@section('widecard-ticket')

    <!-- Wide Card Ticket -->

    <div class="services-section-wide-card" id="wide-card">

        @if($banner)
        
        <div class="oval-card">
            <div class="gif-container">
            

                <img src="{{ asset('storage/'.$banner->image) }}" alt="Animated GIF">

               
                    
            </div>
            <div class="separator"></div>
            <div class="text-container">

                @if($banner)
             
                    <h4>{{ $banner->title }}</h4>
                    <h3>PKR: {{ $banner->amount }}</h3>

                @endif

                <!--<h3>Airine:</h3>-->
            </div>
        </div>

        @endif
        
    </div>
    
@endsection



@section('services-section')

    <!-- Services Section -->

    <div class="services-section">
        <div class="services-cards">
        <a href="#wide-card" class="scrolly service-card">
            <img src="{{ asset('images/Services/airplane.gif') }}" alt="Plane Tickets">
        </a>
        <a href="#one" class="scrolly service-card">
            <img src="{{ asset('images/Services/around-the-world.gif') }}" alt="Travel Around the World">
        </a>
        <a href="#pakages" class="scrolly service-card" alt="Umrah Pakages">
            <img src="{{ asset('images/Services/pakages.gif') }}" alt="Umrah Packages">
        </a>
        <a href="https://maps.google.com/?q=31.551498,74.335350" class="service-card" target="_blank">
            <img src="{{ asset('images/Services/map.gif') }}" alt="Office location">
        </a>
        </div>
    </div>
    
@endsection


@section('whastapp-scrolling')

    <!-- Whatsapp Scrolling -->

    <a href="https://api.whatsapp.com/send?phone=923239998881" class="whatsapp-icon" target="_blank">
        <i class="icon brands alt fa-whatsapp"></i>
    </a>

    
@endsection