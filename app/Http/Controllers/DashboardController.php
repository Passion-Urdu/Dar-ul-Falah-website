<?php

namespace App\Http\Controllers;

use App\Models\Menu;

use App\Models\Slider;

use App\Models\User;

use App\Models\Package;

use Carbon\Carbon;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){
        
        $menu = Menu::select('menu_count')->latest()->get();
        
        $slider = Slider::select('slider_count')->latest()->get();
        
        $user = User::select('user_count')->latest()->get();
        
        $package = Package::select('package_count')->latest()->get();
        
        $yesterday_booking = Package::whereDate('created_at' , Carbon::yesterday())->count();
        
        $today_booking = Package::whereDate('created_at' , Carbon::today())->count();
        
        $monthly_booking = Package::whereMonth('created_at' , Carbon::now()->month)->count();

        return view('dashboard.index' , compact('menu' , 'slider' , 'user' , 'package' , 'yesterday_booking' , 'today_booking' , 'monthly_booking'));
    }
}
