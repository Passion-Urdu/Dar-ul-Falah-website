<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Package;
use App\Models\Pakage;
use App\Models\SubCategory;
use App\Models\Wadge;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    

    public function index(){

        $cat1 = Category::take(1)->first();

        $cat2 = Category::skip(1)->take(1)->first();
        
        $wadge = Wadge::take(1)->first();

        $subcate1 = SubCategory::join('categories' , 'sub_categories.cate_id' , '=' , 'categories.id')
                        ->join('prices' , 'sub_categories.pr_id' , '=' , 'prices.id')
                        ->select('sub_categories.*' , 'sub_categories.name as subcate_name' , 'categories.name' , 'prices.price_amount')
                       ->where('categories.name' , 'LIKE' , 'mak%')
                        ->get();

        $subcate2 = SubCategory::join('categories' , 'sub_categories.cate_id' , '=' , 'categories.id')
                         ->join('prices' , 'sub_categories.pr_id' , '=' , 'prices.id')
                        ->select('sub_categories.*' , 'sub_categories.name as subcate_name' , 'categories.name' , 'prices.price_amount')
                       ->where('categories.name' ,'LIKE' , 'mad%')
                        ->get();
                        
    

        return view('website.Package-Calculator-Client' , compact('cat1' , 'cat2' , 'subcate1' , 'subcate2' , 'wadge'));

    }
    
    
      
    public function show(){
        
        $show = Package:: all();
        
        return view('dashboard.view-package' , compact('show'));
    }


    public function store(Request $req){

        $req->validate([

            'name' => 'required',

            'phone_no' => 'required|max:11',
            
            'city' => 'required',

            'makkah_nights' => 'required|numeric',

            'madinah_nights' => 'required|numeric',

        ]);

        $name_exits = Package::where('phone' , $req->phone_no)->first();

        if($name_exits){

            return response()->json([

            'status' => 'error',

            'message' => 'pakage already exists',

        ] , 500);

        }

        else{
            
                 
                $last_user = Package::latest()->first();
                
                if($last_user){
                    
                    $count = $last_user->package_count = $last_user->package_count + 1;
                }
                
                else{
                    
                    $count = 1;
                    
                }
        

            $store = Package::create([

                'name' => $req->name,

                'phone' => $req->phone_no,
                
                'city' => $req->city,

                'category_1' => $req->makkah_hotels,

                'category_2' => $req->madinah_hotels,

                'sub_category_1' => $req->makkah_sub,
                
                'sub_category1_rating' => $req->makkah_rating,
                
                'sub_category1_class' => $req->makkah_class,

                'sub_category_2' => $req->madinah_sub,
                
                'sub_category2_rating' => $req->madinah_rating,
                
                'sub_category2_class' => $req->madinah_class,

                'mecca_nights' => $req->makkah_nights,

                'madina_nights' => $req->madinah_nights,

                'airline_ticket' => $req->air_ticket,

                'sharing_rate' => $req->sharing_rate,

                'quad_rate' => $req->quad_rate,

                'triple_rate' => $req->triple_rate,

                'double_rate' => $req->double_rate,
                
                'package_count' => $count,
                

            ]);
            
            

            if($store){

                return response()->json([

                    'status' => 'success',

                    'message' => 'pakage created successfully',

                    'data' => $store,
        
                ] , 200);

            }
        }

        
    }
    
    
    
    public function edit(string $id){
        
        $category = Category::select('name')->take(2)->get();
        
        $subcategory = SubCategory::select('name')->get();
        
        $single_record = Package::find($id);
        
        return view('dashboard.update-package' , compact('category' , 'subcategory' , 'single_record'));
        
    }
    
    public function update(Request $req , string $id){
        
        $single_record = Package::find($id);
        
        $req->validate([
            
            'p_name' => 'required',
            
            'p_phone' => 'required|numeric',
            
            'p_city' => 'required',
            
            'p_subcat1_rate' => 'required',
            
            'p_subcat1_class' => 'required',
            
            'p_subcat2_rate' => 'required',
            
            'p_subcat2_class' => 'required',
            
            'p_makkah' => 'required|numeric',
            
            'p_madina' => 'required|numeric',
            
            'p_sharing' => 'required',
            
            'p_quad' => 'required',
            
            'p_triple' => 'required',
            
            'p_double' => 'required',
            
        ]);
        
        if($single_record){
            
            $update = $single_record->update([
                        
                        'name' => $req->p_name,
                        
                        'phone' => $req->p_phone,
                        
                        'city' => $req->p_city,
                        
                        'category_1' => $req->p_cat1,
                        
                        'category_2' => $req->p_cat2,
                        
                        'sub_category_1' => $req->p_subcat1,
                        
                        'sub_category1_rating' => $req->p_subcat1_rate,
                        
                        'sub_category1_class' => $req->p_subcat1_class,
                        
                        'sub_category_2' => $req->p_subcat2,
                        
                        'sub_category2_rating' => $req->p_subcat2_rate,
                        
                        'sub_category2_class' => $req->p_subcat2_class,
                        
                        'mecca_nights' => $req->p_makkah,
                        
                        'madina_nights' => $req->p_madina,
                        
                        'sharing_rate' => $req->p_sharing,
                        
                        'quad_rate' => $req->p_quad,
                        
                        'triple_rate' => $req->p_triple,
                        
                        'double_rate' => $req->p_double,
                
                      ]);
                      
                      
            if($update){
                
                return redirect()->route('packages.show')->with('success' , 'package updated successfully');
            }
        }
    }
    
    
    public function destroy(string $id){
        
        $single_record = Package::find($id);
        
        if($single_record){
            
            $delete = $single_record->delete();
            
            if($delete){
                
                return redirect()->route('packages.show')->with('error' , 'package deleted successfully');
            }
        }
    }
}
