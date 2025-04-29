<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Price;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function show(){

        $show = SubCategory::join('categories' , 'sub_categories.cate_id' , '=' , 'categories.id')
        
                    ->join('prices' , 'sub_categories.pr_id' , '=' , 'prices.id')
        
                    ->select('sub_categories.*' , 'categories.category_id' , 'prices.price_id')
                    
                    ->get();
    

        return view('dashboard.view-subcategory' , compact('show'));
    }

    public function create(){

        $show1 = Category::all();
        
        $show2 = Price::all();
        
         return view('dashboard.create-subcategory' , compact('show1' , 'show2'));
    }

    public function store(Request $req){

        $req->validate([
            
            'm_title' => 'required',

            'sc_name' => 'required',

             'sc_id' => 'required',

            'sc_rating' => 'required',

            'sc_class' => 'required',
            
            'sc_image' => 'required|mimes:png,jpg,jpeg|max:3000',

        ],
        [
           
            'sc_image.mimes' => 'only jpg , jpeg and png images allowed',
            
        ]);
        
        
        $image = $req->sc_image;
        
        $image_content = file_get_contents($image);
            
        $hashed_image = md5($image_content);
    

        $subcategory_id = SubCategory::where('subcategory_id' , $req->sc_id)->first();
        
        $image_exists = SubCategory::where('image_hash' , $hashed_image)->first();
        

        if($subcategory_id){

            return back()->with('error' , 'subcategory already exits');
        }
        
        
         if($image_exists){
            
            return back()->with('error' , 'image already exits');
        }

        else{
            
            $path = $image->store('images/subcategory' , 'public');

            $store = SubCategory::create([
                
                
                'main_title' => $req->m_title,

                'name' => $req->sc_name,

                'subcategory_id' => $req->sc_id,

                'cate_id' => $req->c_id,

                'rating' => $req->sc_rating,

                'class' => $req->sc_class,
                
                'pr_id' => $req->p_id,
                
                'subcategory_image' => $path,
                
                'image_hash' =>  $hashed_image,

            ]);

            if($store){

                return redirect()->route('subcategories.show')->with('success' , 'subcategory created successfully');
            }
        }
    }

    public function edit(string $id){


       $single_subcategory = SubCategory::find($id);

        $show1 = Category::all();
        
        $show2 = Price::all();
        

        return view('dashboard.update-subcategory' , compact('single_subcategory' , 'show1' , 'show2'));
    }

    public function update(Request $req , string $id){

        $req->validate([
            

            'm_title' => 'required',

            'sc_name' => 'required',

            'sc_rating' => 'required',

            'sc_class' => 'required',
            
            'sc_image' => 'required|mimes:png,jpg,jpeg|max:3000',

        ],
        
        [
           
            'sc_image.mimes' => 'only jpg , jpeg and png images allowed',
            
        ]);


            $single_record = SubCategory::find($id);
            
            
             if($req->hasFile('sc_image')){
                
                $image_path = public_path('storage/').$single_record->subcategory_image;
                
                if(file_exists($image_path)){
                    
                    @unlink($image_path);
                }
                
                $path = $req->file('sc_image')->store('images/subcategory' , 'public');
                
                $single_record->main_title = $req->m_title;
                
                $single_record->name = $req->sc_name;
                
                $single_record->cate_id = $req->c_id;
                
                $single_record->rating = $req->sc_rating;
                
                $single_record->class = $req->sc_class;
                
                $single_record->pr_id = $req->p_id;
                
                $single_record->subcategory_image = $path;
                
                $single_record->save();
                
                return redirect()->route('subcategories.show')->with('success' , 'subcategory updated successfully');
            }


    }

    public function destroy(string $id){

        $single_record = SubCategory::find($id);

        $delete = $single_record->delete();
            
        $image_path = public_path('storage/').$single_record->subcategory_image;
            
        if(file_exists($image_path)){
                    
            @unlink($image_path);
        
        }

        return redirect()->route('subcategories.show')->with('error' , 'subcategory deleted successfully');
        
    }
}
