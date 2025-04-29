<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function show(){

        $show = Banner::all();

        return view('dashboard.view-banner' , compact('show'));
    }

    public function create(){

        return view('dashboard.create-banner');
    }

    public function store(Request $req){
        
        
        $req->validate([

            'b_image' => 'required|mimes:png,jpg,jpeg,gif|max:3000',

            'b_title' => 'required|max:21',

            'b_amount' => 'required|numeric|digits_between:1,6',

        ]);

       $image = $req->b_image;

       $image_content = file_get_contents($image);

       $hashed_image = md5($image_content);

       $banner_exists = Banner::where('hash' , $hashed_image)
       
                                ->orwhere('amount' , $req->b_amount)->first();

       if($banner_exists){

           return back()->with('error' , 'Banner Already Exits');
       }

       else{

            $path = $image->store('images/banner' , 'public');

            $store = Banner::create([

                'image' => $path,

                'hash' => $hashed_image,

                'title' => $req->b_title,

                'amount' => $req->b_amount,

            ]);

            if($store){

                return redirect()->route('banners.show')->with('success' , 'Banner Created SuccessFully');
            }
       }

    }

    public function edit(string $id){

        $single_record = Banner::find($id);

        return view('dashboard/update-banner' , compact('single_record'));

    }

    public function update(Request $req , string $id){

        $single_record = Banner::find($id);

        $req->validate([

            'b_image' => 'required|mimes:png,jpg,jpeg,gif|max:3000',

            'b_title' => 'required|max:21',

            'b_amount' => 'required|numeric|digits_between:1,6',

        ]
        ,
        [
            
            'b_image.required' => 'Image Field Is Required',
            
        ]);

       $image = $req->b_image;

       $image_content = file_get_contents($image);

       $hashed_image = md5($image_content);


            if($req->hasFile('b_image')){

                $image_path = public_path('storage/').$single_record->image;

                if(file_exists($image_path)){

                    @unlink($image_path);

                }

                $path = $image->store('images/banner' , 'public');

                $single_record->image = $path;

                $single_record->hash =  $hashed_image;

                $single_record->title = $req->b_title;

                $single_record->amount = $req->b_amount;

                $single_record->save();

                return redirect()->route('banners.show')->with('success' , 'Banner Updated Successfully');

            }
        
    }

    public function destroy(string $id){

        $single_record = Banner::find($id);

        $single_record->delete();

        $image_path = public_path('storage/').$single_record->image;

        if(file_exists($image_path)){

            @unlink($image_path);
        }

        return back()->with('error' , 'Banner Deleted Successfully');

    }
}
