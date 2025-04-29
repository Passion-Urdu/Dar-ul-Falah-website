@extends('dashboard.master-layout')

@section('main-title')

    Dar-Ul-Falah - Admin
    
@endsection

@section('content')

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Menus</h3>
                    <div class="d-inline-block">
                        
                          @if(isset($menu[0]))
                        
                          <h2 class="text-white">{{ $menu[0]->menu_count }}</h2>
                        
                          @else
                        
                          <h2 class="text-white">0</h2>
                        
                          @endif
                        
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-solid fa-inbox"></i></i></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-2">
                <div class="card-body">
                    <h3 class="card-title text-white">Sliders</h3>
                    <div class="d-inline-block">
                        
                          @if(isset($slider[0]))
                        
                          <h2 class="text-white">{{ $slider[0]->slider_count }}</h2>
                        
                          @else
                        
                          <h2 class="text-white">0</h2>
                        
                          @endif
                       
                        
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-solid fa-image"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-3">
                <div class="card-body">
                    <h3 class="card-title text-white">Users</h3>
                    <div class="d-inline-block">
                       
                        @if(isset($user[0]))
                        
                        <h2 class="text-white">{{ $user[0]->user_count }}</h2>
                        
                        @else
                        
                         <h2 class="text-white">0</h2>
                        
                        @endif
                       
                       
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-4">
                <div class="card-body">
                    <h3 class="card-title text-white">Total Bookings</h3>
                    <div class="d-inline-block">
                        
                        @if(isset($package[0]))
                        
                        <h2 class="text-white">{{ $package[0]->package_count }}</h2>
                        
                        @else
                        
                         <h2 class="text-white">0</h2>
                        
                        @endif
                        
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-solid fa-briefcase"></i></span>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Yesterday Bookings</h3>
                    <div class="d-inline-block">
                        
                            @if($yesterday_booking)
                        
                                <h2 class="text-white">{{ $yesterday_booking }}</h2>
                            
                            @else
                                
                                <h2 class="text-white">0</h2>
                            
                            
                            @endif
                        
                        
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-solid fa-briefcase"></i></i></i></span>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Today Bookings</h3>
                    <div class="d-inline-block">
                        
                          @if($today_booking)
                        
                                <h2 class="text-white">{{ $today_booking }}</h2>
                            
                            @else
                                
                                <h2 class="text-white">0</h2>
                            
                            
                            @endif
                        
                        
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-solid fa-briefcase"></i></i></i></span>
                </div>
            </div>
        </div>
        
        
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Monthly Bookings</h3>
                    <div class="d-inline-block">
                        
                          @if($monthly_booking)
                        
                                <h2 class="text-white">{{ $monthly_booking }}</h2>
                            
                            @else
                                
                                <h2 class="text-white">0</h2>
                            
                            
                            @endif
                        
                        
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-solid fa-briefcase"></i></i></i></span>
                </div>
            </div>
        </div>
        
        
    </div>

</div>
    
@endsection

