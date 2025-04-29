<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(){

         $show = Category::all();

        return view('dashboard.view-category' , compact('show'));
    }

    public function create(){

        return view('dashboard.create-category');
    }

    public function store(Request $req){
    
        
        $req->validate([
            
            'm_title' => 'required',
            
            'c_name' => 'required',
            
            'c_id' => 'required',

            'cat_image' => 'required|mimes:png,jpg,jpeg|max:3000',

        ],
        [
            'cat_image.mimes' => 'only jpg , jpeg and png images allowed',
        ]);
        
        
        $image = $req->cat_image;
        
        $image_content = file_get_contents($image);
            
        $hashed_image = md5($image_content);
    

        $category_id = Category::where('category_id' , $req->c_id)->first();
        
         $image_exists = Category::where('image_hash' , $hashed_image)->first();

        if($category_id){

            return back()->with('error' , 'category already exits');
        }
        
        if($image_exists){
            
            return back()->with('error' , 'image already exits');
        }

        else{
            
            $path = $image->store('images/category' , 'public');

            $store = Category::create([
                
                'main_title' => $req->m_title,
                
                'name' => $req->c_name,

                'category_id' => $req->c_id,
                
                'category_image' => $path,
                
                'image_hash' => $hashed_image,

            ]);

            if($store){

                return redirect()->route('categories.show')->with('success' , 'category created successfully');
            }
        }
    }

    public function edit(string $id){

        $single_record = Category::find($id);

        return view('dashboard.update-category' , compact('single_record'));
    }

    public function update(Request $req , string $id){

        $req->validate([

            'm_title' => 'required',
            
            'c_name' => 'required',

            'cat_image' => 'required|mimes:png,jpg,jpeg|max:3000',

        ],
         [
            'cat_image.mimes' => 'only jpg , jpeg and png images allowed',
        ]);
        
        
            $single_record = Category::find($id);
        
        
            if($req->hasFile('cat_image')){
                
                $image_path = public_path('storage/').$single_record->category_image;
                
                if(file_exists($image_path)){
                    
                    @unlink($image_path);
                }
                
                $path = $req->file('cat_image')->store('images/category' , 'public');
                
                $single_record->main_title = $req->m_title;
                
                $single_record->name = $req->c_name;
                
                $single_record->category_image = $path;
                
                $single_record->save();
                
                return redirect()->route('categories.show')->with('success' , 'category updated successfully');
            }

    }

    public function destroy(string $id){

        $single_record = Category::find($id);

            $delete = $single_record->delete();
            
             $image_path = public_path('storage/').$single_record->category_image;
            
             if(file_exists($image_path)){
                    
                    @unlink($image_path);
                }

             return redirect()->route('categories.show')->with('error' , 'category deleted successfully');
            
          
    }

}
