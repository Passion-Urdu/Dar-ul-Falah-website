<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function show(){

        $show = Slider::all();

        return view('dashboard.view-slider' , compact('show'));
    }

    public function create(){

        return view('dashboard.create-slider');
    }

    public function store(Request $req){

        $req->validate([

            's_image' => 'required|mimes:png,jpg,jpeg|max:3000'

        ]);

       $image = $req->s_image;

       $image_content = file_get_contents($image);

       $hashed_image = md5($image_content);

       $image_exists = Slider::where('hash' , $hashed_image)->first();

       if($image_exists){

           return back()->with('error' , 'Slider Already Exits');
       }

       else{
           
            $last_slider = Slider::latest()->first();
            
            if($last_slider){
                
                 $count = $last_slider->slider_count = $last_slider->slider_count + 1;
            }
            
            else{
                
                $count = 1;
            }

            $path = $image->store('images' , 'public');

            $store = Slider::create([

                'image' => $path,

                'hash' => $hashed_image,
                
                'slider_count' => $count,

            ]);

            if($store){

                return redirect()->route('sliders.show')->with('success' , 'Slider Created SuccessFully');
            }
       }

       
        
    }

    public function edit(string $id){

        $single_record = Slider::find($id);

        return view('dashboard/update-slider' , compact('single_record'));

    }

    public function update(Request $req , string $id){

       $single_record = Slider::find($id);

         $req->validate([

            's_image' => 'required|mimes:png,jpg,jpeg,gif|max:3000'

        ]
        ,
        [
            's_image.required' => 'Image Field Is Required',
        ]);

       $image = $req->s_image;

       $image_content = file_get_contents($image);

       $hashed_image = md5($image_content);


            if($req->hasFile('s_image')){

                $image_path = public_path('storage/').$single_record->image;

                if(file_exists($image_path)){

                    @unlink($image_path);

                }

                $path = $image->store('images' , 'public');

                $single_record->image = $path;

                $single_record->hash = $hashed_image;

                $single_record->save();

                return redirect()->route('sliders.show')->with('success' , 'Slider Updated Successfully');

            }
        
    }

    public function destroy(string $id){

        $single_record = Slider::find($id);
        
        $last_slider = Slider::latest()->first();
        
        $last_slider->slider_count =  $last_slider->slider_count - 1;

        $single_record->delete();

        $image_path = public_path('storage/').$single_record->image;

        if(file_exists($image_path)){

            @unlink($image_path);
        }

        return back()->with('error' , 'Slider Deleted Successfully');

    }
}
