<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Menu;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $menu = Menu::all();

        $slide = Slider::all();

        $banner = Banner::first();

        return view('website.index' , compact('menu' , 'slide' , 'banner'));
    }
}
