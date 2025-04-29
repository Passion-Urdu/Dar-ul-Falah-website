<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Menu;
use App\Models\Package;
use Illuminate\Http\Request;

class AssetController extends Controller
{

    public function show(){

        $show = Asset::join('menus' , 'assets.m_id' , '=' , 'menus.id')
        
                        ->join('packages' , 'assets.pkg_id' , '=' , 'packages.id')
                    
                        ->select('assets.*' , 'menus.menu_id')
                        
                        ->get();

        return view('dashboard.view-package-assets' , compact('show'));
    }

    public function create(){

         $select = Menu::select('id' , 'menu_id')->get();
         
         $package = Package::select('id')->get();

        return view('dashboard.create-package-assets' , compact('select' , 'package'));
    }

    public function store(Request $req){
        

        $req->validate([

            'as_id' => 'required',

            'at_image' => 'required|mimes:png,jpg,jpeg|max:3000',

            'ac_title' => 'required',

            'at_title' => 'required',

            'at_subtitle' => 'required',

        ]
        ,
        [
            'at_image.mimes' => 'only jpg png and jpeg format allowed',
            
        ]);

       $image = $req->at_image;

       $asset_exists = Asset::where('asset_id' , $req->as_id)
                            
                            ->first();

       if($asset_exists){

           return back()->with('error' , 'Asset Already Exits');
       }

       else{

            $path = $image->store('images/Days-Pakages' , 'public');

            $store = Asset::create([

                'asset_id' => $req->as_id,

                'image' => $path,

                'm_id' => $req->m_id,

                'content_title' => $req->ac_title,

                'title' => $req->at_title,

                'sub_title' => $req->at_subtitle,
                
                'pkg_id' => $req->pkg_id,

            ]);

            if($store){

                return redirect()->route('assets.show')->with('success' , 'Asset Created SuccessFully');
            }
       }

    }

    public function edit(string $id){

        $single_record = Asset::find($id);

        $select = Menu::select('id' , 'menu_id')->get();

        return view('dashboard/update-package-assets' , compact('single_record') , compact('select'));

    }

    public function update(Request $req , string $id){

        $single_record = Asset::find($id);

        $req->validate([

            'at_image' => 'required|mimes:png,jpg,jpeg|max:3000',

            'ac_title' => 'required',

            'at_title' => 'required',

            'at_subtitle' => 'required',

        ]
        ,
        [
            
            'at_image.required' => 'image field is required',
            
            'at_image.mimes' => 'only jpg png and jpeg format allowed',
            
        ]);

       $image = $req->at_image;


            if($req->hasFile('at_image')){

                $image_path = public_path('storage/').$single_record->image;

                if(file_exists($image_path)){

                    @unlink($image_path);

                }

                $path = $image->store('images/Days-Pakages' , 'public');

                $single_record->image = $path;

                $single_record->m_id = $req->m_id;

                $single_record->content_title = $req->ac_title;

                $single_record->title = $req->at_title;

                $single_record->sub_title = $req->at_subtitle;
                
                $single_record->pkg_id = $req->pkg_id;

                $single_record->save();

                return redirect()->route('assets.show')->with('success' , 'Asset Updated Successfully');

            }
        
    }

    public function destroy(string $id){

        $single_record = Asset::find($id);

        $single_record->delete();

        $image_path = public_path('storage/').$single_record->image;

        if(file_exists($image_path)){

            @unlink($image_path);
        }

        return back()->with('error' , 'Asset Deleted Successfully');

    }

}
