<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(){

        $menu = Menu::all();
        
        $title = Category::select('main_title')->first();
        
        $category = Category::all();
        
    
        return view('website.Hotels' , compact('menu' , 'title' , 'category'));
    }
    
     public function show(string $id){
         
         $title = SubCategory::where('cate_id' , $id)->select('main_title')->first();
        
         $hotels = SubCategory::where('cate_id' , $id)->get();
        
        
        return view('website.Mecca-Hotels' , compact('title', 'hotels'));
        
       
    }
    
    
   
}
