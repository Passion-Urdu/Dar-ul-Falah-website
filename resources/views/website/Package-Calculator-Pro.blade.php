@extends('website.master-layout-2')

@section('title')

    DFI - Office Calculator
    
@endsection

@section('assests')

<link rel="icon" type="image/png" href="{{ asset('images/Favicon.png') }}">

<link rel="stylesheet" href="{{ asset('css/office-calculator-client.css') }}">
    
@endsection

@push('head-scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>

@endpush



@section('pro-calculator')

     <!-- Logo section -->
     <div class="logo-container">
        <a href="/">
            <img src="{{ asset('images/Logo.png') }}" alt="Logo">
        </a>
    </div>
    
    
    <h1>Office - Umrah Package Calculator</h1>

                    

<br>
<br>

<!-- New input group for Name -->
<div class="input-group">
    <label for="client-name">Client Name:</label>
    <input type="text" id="client-name" placeholder="Enter client name" required>
</div>


<br>

                
                <div class="input-group">
                    <label for="mecca-hotel">Makkah Hotel:</label>
                    <input type="text" id="mecca-hotel" class="hidden-input" placeholder="Enter hotel name" required>
                </div>
                <div class="input-group">
                    <label for="mecca-rate">Makkah Hotel Rate per Day (SAR):</label>
                    <input type="number" id="mecca-rate" class="hidden-input" placeholder="required" required>
                </div>

                <div class="input-group-inline">
                <div class="input-group">
                    <label for="mecca-rating">Makkah Hotel Rating:</label>
                    <input type="text" id="mecca-rating" class="hidden-input" placeholder="(e.g., Economy, Star)" required>
                </div>
                
                <div class="input-group">
                    <label for="mecca-distance">Makkah Hotel Distance:</label>
                    <input type="text" id="mecca-distance" class="hidden-input" placeholder="(e.g., 400m)" required>
                </div>
                </div>
                <div class="input-group">
                    <label for="mecca-nights">Number of Nights in Makkah:</label>
                    <input type="number" id="mecca-nights" placeholder="required" required>
                </div>
                <div class="input-group">
                    <label for="number-rooms-makkah">Number of Rooms:</label>
                    <input type="number" id="number-rooms-makkah" placeholder="optional">
                </div>
                                
<br>
            
                <div class="input-group">
                    <label for="madinah-hotel">Madinah Hotel:</label>
                    <input type="text" id="madinah-hotel" class="hidden-input" placeholder="Enter hotel name" required>
                </div>
                <div class="input-group">
                    <label for="mecca-rate">Madinah Hotel Rate per Day (SAR):</label>
                    <input type="number" id="madinah-rate" class="hidden-input" placeholder="required" required>
                </div>
                <div class="input-group-inline">
                <div class="input-group">
                    <label for="madinah-rating">Madinah Hotel Rating:</label>
                    <input type="text" id="madinah-rating" class="hidden-input" placeholder="(e.g., Economy, Star)" required>
                </div>
                
                <div class="input-group">
                    <label for="madinah-distance">Madinah Hotel Distance:</label>
                    <input type="text" id="madinah-distance" class="hidden-input" placeholder="(e.g., 400m)" required>
                </div>
                </div>    
                <div class="input-group">
                    <label for="madinah-nights">Number of Nights in Madinah:</label>
                    <input type="number" id="madinah-nights" placeholder="required" required>
                </div>
                <div class="input-group">
                    <label for="number-rooms-madinah">Number of Rooms:</label>
                    <input type="number" id="number-rooms-madinah" placeholder="optional">
                </div>

                <br>

                
                
                <div class="package-type-container">
                    <label>
                        <input type="radio" name="package-type" value="double" checked> Double
                    </label>
                    <label>
                        <input type="radio" name="package-type" value="triple"> Triple
                    </label>
                    <label>
                        <input type="radio" name="package-type" value="quad"> Quad
                    </label>
                    <label>
                        <input type="radio" name="package-type" value="quint"> Quint
                    </label>
                </div>
                <br>

                <div class="input-group">
                    <label for="profit-per-person">Profit per person:</label>
                    <input type="number" id="profit-per-person" placeholder="required" required>
                </div>

                <div class="input-group">
                    <label for="conversion-rate">Conversion Rate (SAR -> PKR):</label>
                    <input type="number" id="conversion-rate" placeholder="required" required>
                </div>
                
                <div class="input-group-inline">
                    <div class="input-group">
                        <label for="number-adults">Number of Adults:</label>
                        <input type="number" id="number-adults" placeholder="required" required>
                    </div>
                    
                    <div class="input-group">
                        <label for="number-children">Number of Children:</label>
                        <input type="number" id="number-children" placeholder="required" required>
                    </div>
                </div>
                
                <div class="input-group-inline">
                    <div class="input-group">
                        <label for="adult-ticket">Adult Ticket (PKR):</label>
                        <input type="number" id="adult-ticket" placeholder="required" required>
                    </div>
                
                    <div class="input-group">
                        <label for="child-ticket">Child Ticket (PKR):</label>
                        <input type="number" id="child-ticket" placeholder="optional">
                    </div>
                </div>

                <div class="input-group">
                    <label for="airline-name">Airline Name:</label>
                    <input type="text" id="airline-name" placeholder="required" required>
                </div>
                
                <div class="input-group">
                    <label for="check-in-date">Check-in Date:</label>
                    <input type="date" id="check-in-date" required>
                </div>
                
                <div class="input-group">
                    <label for="check-out-date">Check-out Date:</label>
                    <input type="date" id="check-out-date" required>
                </div>
                
                
                

                <br>

                <button onclick="calculatePackage()">Calculate Package</button>

                <div class="output-group">
                    <div class="output">
                        <br>
                        <h2>Single Adult Package</h2>
                        <p id="single-adult-rate-pkr">--</p>
                    </div>
                    <div class="output">
                        <br>
                        <h2>Single Child Package</h2>
                        <p id="single-child-rate-pkr">--</p>
                    </div>
                    <div class="output">
                        <br>
                        <h2>Total Cost</h2>
                        <p id="total-cost-pkr">--</p>
                    </div>
                </div>
<br>
        <!-- Button to Download  -->
         
        <div>
            <button id="download-dropdown-pdf">Download PDF</button>
        </div>

<br>

    <div class="footer">
    <img src="{{ asset('images/IATA.png') }}" alt="IATA Logo">
    </div>

    </div>
    
@endsection

@push('scripts')

    <script src="{{ asset('js/office-calculator-client.js') }}"></script>
    <script src="{{ asset('js/office-calculator-pdf-download.js') }}"></script>

@endpush