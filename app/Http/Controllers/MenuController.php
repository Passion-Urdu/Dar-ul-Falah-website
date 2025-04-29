<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function index(){

        $show = Menu::all();

        return view('website.index' , compact('show'));
    }

    public function hotels(){

        $show = Menu::all();

        return view('website.hotels' , compact('show'));
    }

    public function create(){

        return view('dashboard.create-menu');
    }

    public function store(Request $req){

        $menu_url = str_replace(' ' , '-' , $req->m_url);

        $req->validate([

            'm_name' => 'required',

            'm_id' => 'required|alpha_num',

            'm_url' => 'required',

        ]);
       
        $menu_id = Menu::where('menu_id' , $req->m_id)->first();

        if($menu_id){

            return back()->with('error' , 'menu already exits');
        }

        else{
            
            $last_menu = Menu::latest()->first();
            
            if($last_menu){
                
                $count = $last_menu->menu_count = $last_menu->menu_count + 1;
            }
            
            else{
                
                 $count = 1;
            }

            $store = Menu::create([

                'menu_name' => $req->m_name,

                'menu_id' => $req->m_id,

                'menu_url' => strtolower($menu_url),

                'menu_count' =>  $count,
            ]);

            if($store){

                return redirect()->route('menus.show')->with('success' , 'menu created successfully');

            }
        }
        
    }

    public function show(){

        $show = Menu::limit(5)->get();

        return view('dashboard.view-menu' , compact('show'));
    }

    public function edit(string $id){

        $show_single = menu::find($id);

        return view('dashboard.update-menu' , compact('show_single'));
    }

    public function update(Request $req , string $id){

        $menu_url = str_replace(' ' , '-' , $req->m_url);

        $req->validate([

            'm_name' => 'required',

            'm_url' => 'required',

        ]);
       

            $record = Menu::find($id);

            if($record){

                $update = $record->update([

                    'menu_name' => $req->m_name,

                    'menu_url' => strtolower($menu_url),

                ]);

                if($update){

                    return redirect()->route('menus.show')->with('success' , 'menu updated successfully');
                }

                

            }
        
    }

    public function destroy(string $id){

        $record = Menu::find($id);
        
        $last_menu = Menu::latest()->first();
        
        $last_menu->menu_count =  $last_menu->menu_count - 1;

        if($record){

            $delete = $record->delete();

            if($delete){

                return redirect()->route('menus.show')->with('error' , 'menu delete successfully');

            }
        }

    }
}
