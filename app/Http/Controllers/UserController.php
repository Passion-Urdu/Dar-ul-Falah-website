<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function show(){

        $show = User::all();

        return view('dashboard.view-user' , compact('show'));
    }

    public function create(){

        return view('dashboard.create-user');
    }

    public function store(Request $req){
        

        $req->validate([

            'name' => 'required|alpha_dash',

            'u_id' => 'required|alpha_num',

            'password' => 'required',

        ]);


        $user_exists = User::where('user_id' , $req->u_id)->first();

        if($user_exists){

            return back()->with('error' , 'user already exists');

        }

        else{
            
        $last_user = User::latest()->first();
        
        if($last_user){
            
            $count = $last_user->user_count = $last_user->user_count + 1;
        }
        
        else{
            
            $count = 1;
            
        }
        

        $store = User::create([

                'name' => $req->name,

                'user_id' => $req->u_id,

                'user_ip' => request()->ip(),

                'password' => $req->password,
                
                'user_count' =>   $count,

            ]);

            if($store){

                return redirect()->route('users.show')->with('success' , 'user created successfully');
            }

        }

    }

    public function edit(string $id){

        $single_record = User::find($id);

        return view('dashboard.update-user' , compact('single_record'));
    }

    public function update(Request $req , string $id){

        $single_record = User::find($id);

        $req->validate([

            'name' => 'required|alpha_dash',

            'password' => 'required',

        ]);

        if($single_record){

            $update = $single_record->update([

                'name' => $req->name,

                'password' => $req->password,

            ]);

            if($update){

                return redirect()->route('users.show')->with('success' , 'user updated successfully');

            }
            
        }


    }
    
    
    public function destroy(string $id){
        
       
        $single_record = User::find($id);
        
        $last_user = User::latest()->first();
        
         $last_user->user_count = $last_user->user_count - 1;

        if($single_record){

            $delete = $single_record->delete();


            if($delete){

                return redirect()->route('users.show')->with('error' , 'user deleted successfully');

            }
        }
    }


}
