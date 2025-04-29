<?php

namespace App\Http\Controllers;

use App\Models\Menu;

use App\Models\Asset;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function page_1(string $menu_url , $id){
        
        
        $menu = Menu::all();
        
        
        $header = Asset::select('title' , 'sub_title')->where('m_id' , $id)->first();
        
       
       $package = Asset::join('packages' , 'assets.pkg_id' , '=' , 'packages.id')
       
                            ->select('assets.*' , 'packages.category_1' , 'packages.category_2' , 'packages.sub_category_1' , 'packages.sub_category1_rating' , 'packages.sub_category1_class' 
                            
                            , 'packages.sub_category_2' , 'packages.sub_category2_rating' , 'packages.sub_category2_class' , 'packages.mecca_nights' 
                            
                            , 'packages.madina_nights' , 'packages.sharing_rate' , 'packages.quad_rate' , 'packages.triple_rate' , 'packages.double_rate' )
                            
                            ->where('m_id' , $id)
                            
                            ->get();


        return view('website.7-days-umrah' , compact('menu' , 'header' , 'package'));

    }

    
}
