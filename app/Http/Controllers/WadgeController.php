<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Wadge;

class WadgeController extends Controller
{
    
    
    public function show(){
        
        $show_wadge = Wadge::first();
        
        return view('dashboard.view-wadge' , compact('show_wadge'));
    }
    
     public function create(){
        
        return view('dashboard.create-wadge');
        
    }
    
    public function store(Request $req){
        
        $req->validate([
            
            'w_id' => 'required',
            
            'v_charge' => 'required|numeric',
            
            'c_rate' => 'required|numeric',
            
            'p_profit1' => 'required|numeric',
            
            'p_profit2' => 'required|numeric',
            
            'p_profit3' => 'required|numeric',
            
            'p_profit4' => 'required|numeric',
            
        ]
        ,
        [
            
            'v_charge.numeric' => 'visa charge should be in numbers',
            
        ]);
        
        $wadge_id = Wadge::where('wadge_id' , $req->w_id)->first();
        
        if($wadge_id){
            
            return back()->with('error' , 'Wadge Already Exists');
        }
        
        else{
            
             $store = Wadge::create([
                 
                 'wadge_id' => $req->w_id,
                 
                 'visa_charges' => $req->v_charge,
                 
                 'conversion_rate' => $req->c_rate,
                 
                 'package_profit1' => $req->p_profit1,
                 
                 'package_profit2' => $req->p_profit2,
                 
                 'package_profit3' => $req->p_profit3,
                 
                 'package_profit4' => $req->p_profit4,
                 
            ]);
            
            if($store){
                
                return redirect()->route('wadges.show')->with('success' , 'Wadge Created Successfully');
            }
        }
        
    }
    
    
    public function edit(string $id){
        
        $single_wadge = Wadge::find($id);
        
        return view('dashboard.update-wadge' , compact('single_wadge'));
    }
    
    
    public function update(Request $req , string $id){
        
        $single_wadge = Wadge::find($id);
        
         $req->validate([
             
            
            'v_charge' => 'required|numeric',
            
            'c_rate' => 'required|numeric',
            
            'p_profit1' => 'required|numeric',
            
            'p_profit2' => 'required|numeric',
            
            'p_profit3' => 'required|numeric',
            
            'p_profit4' => 'required|numeric',
            
        ]
        ,
        [
            
            'v_charge.numeric' => 'visa charge should be in numbers',
            
        ]);
        
        
        if($single_wadge){
            
            $update = $single_wadge->update([

                 
                 'visa_charges' => $req->v_charge,
                 
                 'conversion_rate' => $req->c_rate,
                 
                 'package_profit1' => $req->p_profit1,
                 
                  'package_profit2' => $req->p_profit2,
                  
                  'package_profit3' => $req->p_profit3,
                   
                  'package_profit4' => $req->p_profit4,
                
            ]);
            
            if($update){
                
                return redirect()->route('wadges.show')->with('success' , 'Wadge Updated Successfully');
            }
            
        }
        
    }
    
    
    public function destroy(string $id){
        
         $single_wadge = Wadge::find($id);
         
         if($single_wadge){
             
             $delete = $single_wadge->delete();
             
             if($delete){
                 
                 return redirect()->route('wadges.show')->with('error' , 'Wadge Deleted Successfully');
                 
             }
         }
        
    }
}
