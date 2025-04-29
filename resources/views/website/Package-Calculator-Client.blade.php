@extends('website.master-layout-2')

@section('title')

    Dar-ul-Falah - Umrah Package Calculator
    
@endsection

@section('assests')

<link rel="apple-touch-icon" href="{{ asset('images/Logo.png') }}">

<link rel="icon" type="image/png" href="{{ asset('images/Favicon.png') }}">

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset('css/package-calculator-client.css') }}">
    
@endsection

@push('head-scripts')

<script src="https://unpkg.com/html2pdf.js@0.10.2/dist/html2pdf.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/html2canvas@1.6.3/dist/html2canvas.min.js"></script>


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
    src="https://www.facebook.com/tr?id=858229675889319&ev=PageView&noscript=1"/>
    </noscript>

    <!-- End Meta Pixel Code -->
    
@endpush

@section('client-calculator')

        <!-- Logo section -->
    <div class="logo-container">
        <a href="/">
            <img src="{{ asset('images/Logo.png') }}" alt="Logo">
        </a>
    </div>


    <h1>Umrah Package Calculator</h1>

        <!-- Button section -->
        <div class="button-container">
            <button id="ticket-button">Info!</button>
        </div>
                    <div id="note" class="note">
                        <div class="note-content">
                            <span id="close-note" class="close-note">&times;</span>
                            <h2>Points to be Noted!</h2>
                            <p><b>1.</b> The hotels are arranged in ascending order based on pricing, starting from the lowest to the highest. 
                                <div class="button-container">
                                    <a href="{{ route('hotel.index') }}" class="view-hotels-button">View All Hotels</a>
                                </div>                                                            
                            </p>
                            <p><b>2.</b> The Quint/Sharing Rate is not available for some 5-Star Hotels. However, this rate is available for all other hotel categories.</p>
                            <p><b>3.</b> Calculated package includes: Accommodation, Visa, Transport and Ticket which is optional.</p>
                        </div>
                    </div>
        

    <br>
    <br>

    <form id="pkg_form">

    <!-- New input group for Name -->
    
    <div class="input-group">
    <label for="name">Name:</label>
    <input type="text" id="name" placeholder="required" required>
    </div>

    <!-- New input group for Phone Number -->
    
    <div class="input-group">
    <label for="phone-number">Phone Number:</label>
    <input type="tel" id="phone-number" placeholder="required" required>
    </div>
    
     <!-- New input group for City -->
     
    <div class="input-group">
    <label for="city">City:</label>
    <input type="text" id="city" placeholder="required" required>
    </div>
    <br>
    <div class="dropdown-wrapper">


    <div class="container">

        <div class="dropdown">
            
            @if($cat1)

            <div class="dropdown-selected mt-3" id="dropdown-selected1"  data-id ="{{ $cat1->name }}">
                <img src="{{ asset('images/Hotels/Mecca-View.jpg') }}" alt="Default" class="dropdown-selected-img">
                <span class="dropdown-selected-text">{{ $cat1->name }} ▼</span>
                <span class="dropdown-selected-rating"></span> <!-- Added for rating -->
            </div>
            
            @endif
            
            <div class="dropdown-items" id="dropdown-items1">
                
                @foreach ($subcate1 as $show_subcate1)

                    <div class="dropdown-item drop-item-1" data-text="{{ $show_subcate1->subcate_name }}" data-value="{{  $show_subcate1->price_amount  }}" data-id="{{ $show_subcate1->subcate_name }}" data-rating="{{ $show_subcate1->rating }}" data-class="{{ $show_subcate1->class }}" data-distance="">
                        <span class="dropdown-item-text">{{ $show_subcate1->subcate_name }}</span>
                        <span class="dropdown-item-rating">{{ $show_subcate1->rating }}</span> <!-- Rating -->
                        <span class="dropdown-item-class">{{ $show_subcate1->class }}</span> <!-- class -->
                        <span class="dropdown-item-distance"></span> <!-- Distance -->
                    </div>

                @endforeach
                
            </div>

        </div>
    </div>
    </div>


    <br>

    <div class="container">
        <div class="dropdown" >
            
             @if($cat2)
    
            <div class="dropdown-selected" id="dropdown-selected2"  data-id="{{ $cat2->name }}">
                <img src="{{ asset('images/Hotels/Madinah-View.jpg') }}" alt="Default" class="dropdown-selected-img">
                <span class="dropdown-selected-text">{{ $cat2->name }} ▼</span>
                <span class="dropdown-selected-rating"></span> <!-- Added for rating -->
                <span class="dropdown-item-distance"></span> <!-- Distance -->

            </div>
            
            @endif
            <div class="dropdown-items" id="dropdown-items2">

                @foreach ($subcate2 as $show_subcate2)
                    
                    <div class="dropdown-item drop-item-2"  data-text="{{  $show_subcate2->subcate_name }}" data-value="{{  $show_subcate2->price_amount  }}" data-id="{{  $show_subcate2->subcate_name }}" data-rating="{{  $show_subcate2->rating }}" data-class="{{  $show_subcate2->class }}" data-distance="">
                        <span class="dropdown-item-text">{{  $show_subcate2->subcate_name }}</span>
                        <span class="dropdown-item-rating">{{  $show_subcate2->rating }}</span> <!-- Rating -->
                        <span class="dropdown-item-class">{{  $show_subcate2->class }}</span> <!-- Rating -->
                        <span class="dropdown-item-distance"></span> <!-- Distance -->
                    </div>

                @endforeach

            </div>
        </div>
    </div>

    <div class="input-group">
    <!-- <label for="mecca-rate">Makkah Hotel Rate per Day (SAR):</label>-->
        <input type="number" id="mecca-rate" class="hidden-input" placeholder="required" required readonly>
    </div>

    <div class="input-group">
    <!-- <label for="mecca-rate">Madinah Hotel Rate per Day (SAR):</label>-->
    <input type="number" id="madinah-rate" class="hidden-input" placeholder="required" required readonly>
    </div>
    <br>

    <div class="input-group">
        <label for="mecca-nights">Number of Nights in Makkah:</label>
        <input type="number" id="mecca-nights" placeholder="required" required>
    </div>

    <div class="input-group">
        <label for="madinah-nights">Number of Nights in Madinah:</label>
        <input type="number" id="madinah-nights" placeholder="required" required>
    </div>

    <div class="input-group">
        <label for="ticket-value">Airline Ticket (PKR):</label>
        <input type="number" id="ticket-value" placeholder="optional">
    </div>
    <br>

    <button onclick="calculatePackage()" id="cal_btn">Calculate Package</button>

    <div class="output-group">
    <div class="output">
    <br>
    <h2>Quint / Sharing Rate</h2>
    <p id="quint-rate-pkr">--</p>
    </div>
    <div class="output">
    <br>
    <h2>Quad Rate</h2>
    <p id="quad-rate-pkr">--</p>
    </div>
    <div class="output">
    <br>
    <h2>Triple Rate</h2>
    <p id="triple-rate-pkr">--</p>
    </div>
    <div class="output">
    <br>
    <h2>Double Rate</h2>
    <p id="double-rate-pkr">--</p>
    </div>
    </div>
    <br>
    <!-- Buttons -->

    <div>
    <button id="download-dropdown-pdf">Download PDF</button>
    </div>

    <div>
        <button class="mt-3" id="submit-btn">Submit Query</button>
    </div>   


    </form>

    <br>

    <div class="footer">
        <img src="{{ asset('images/IATA.png') }}" alt="IATA Logo">
    </div>

        
@endsection

@php


$wadge;


@endphp

@push('scripts')

     <!-- Other content and scripts -->
    
    
     <script src="{{ asset('js/jquery.min.js') }}"></script>
     <script src="{{ asset('js/package-calculator-client.js') }}"></script>
     <script src="{{ asset('js/pdf-download.js') }}"></script>
    
 
 <script>
 

 // <!-- Submit Button Functionality -->

    $(document).ready(function(){

        let iscalculation = false;

        let datavalue1 = '';

        let datavalue2 = '';

        $('#cal_btn').on('click' , function(e){

            e.preventDefault();

            iscalculation = true;

        });

        $('.drop-item-1').on('click' , function(){

            datavalue1 = $(this).data('id');
            
            datarate1 = $(this).data('rating');
            
            dataclass1 = $(this).data('class');

        });
        
        
        $('.drop-item-2').on('click' , function(){

            datavalue2 = $(this).data('id');
            
            datarate2 = $(this).data('rating');
            
            dataclass2 = $(this).data('class');

        });


        $("#submit-btn").on('click' , function(e){

            e.preventDefault();

                if(!iscalculation){

                    alert('please calculate package first');
                }

                else{

                    let data = {

                        name: $("#name").val(),

                        phone_no: $("#phone-number").val(),
                        
                        city: $("#city").val(),

                        makkah_hotels: $('#dropdown-selected1').data('id'),

                        madinah_hotels: $('#dropdown-selected2').data('id'),

                        makkah_sub: '',
                        
                        makkah_rating: '',
                        
                        makkah_class: '',

                        madinah_sub: '',
                        
                        madinah_rating: '',
                         
                        madinah_class: '',

                        makkah_nights: $('#mecca-nights').val(),

                        madinah_nights: $('#madinah-nights').val(),

                        air_ticket: $('#ticket-value').val(),

                        sharing_rate: $('#quint-rate-pkr').html(),

                        quad_rate: $('#quad-rate-pkr').html(),

                        double_rate: $('#double-rate-pkr').html(),

                        triple_rate: $('#triple-rate-pkr').html(),

                        _token: $('meta[name="csrf-token"]').attr('content'),
                    
                    };
                    

                    if(datavalue1){

                        data.makkah_sub = datavalue1;
                        
                        data.makkah_rating = datarate1;
                         
                        data.makkah_class = dataclass1;
                    }
                    
                    if(datavalue2){

                        data.madinah_sub = datavalue2;
                        
                        data.madinah_rating = datarate2;
                         
                        data.madinah_class = dataclass2;
                    }
                    
                

                $.ajax({

                    url: "{{ route('packages.store') }}",

                    type: "POST",

                    data: JSON.stringify(data),

                    contentType: 'application/json',

                    success: function(result){

                        console.log(result);

                        alert(result.message);

                        $('#pkg_form')[0].reset();

                    },

                    error: function(xhr , status , error){

                        let response = JSON.parse(xhr.responseText);

                        alert(response.message);

                        $('#pkg_form')[0].reset();
                    }

                });

            }

        });


    });
    
     let wadge_data = @json($wadge);
        

 </script> 
    
@endpush

