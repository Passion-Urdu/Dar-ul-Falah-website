<?php

namespace App\Http\Controllers;

use App\Models\Price;

use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function show(){
        
        $show = Price::orderBy('price_amount')->get();
    
        return view('dashboard.view-price' , compact('show'));
    }
    
    public function create(){
        
        return view('dashboard.create-price');
    }
    
    public function store(Request $req){
        
       $req->validate([
           
           'p_id' => 'required',
           
           'p_amount' => 'required|numeric',
           
         ]);
         
         $price_id = Price::where('price_id' , $req->p_id)->first();
         
         if($price_id){
             
             return back()->with('error' , 'Price Already Exists');
         }
         
         else{
             
             $store = Price::create([
                 
                 'price_id' => $req->p_id,
                 
                 'price_amount' => $req->p_amount,
                 
             ]);
             
             if($store){
                 
                 return redirect()->route('prices.show')->with('success' , 'Price Created Successfully');
             }
         }
    }
    
    public function edit(string $id){
        
        $single_record = Price::find($id);
        
        return view('dashboard.update-price' , compact('single_record'));
    }
    
    public function update(Request $req , string $id){
        
        $single_record = Price::find($id);
        
         $req->validate([
           
           'p_amount' => 'required|numeric',
           
         ]);
         
         
         if($single_record){
             
              $update = $single_record->update([
                  
                  'price_amount' => $req->p_amount,
                  
              ]);
              
              if($update){
                  
                  return redirect()->route('prices.show')->with('success' , 'Price Updated Successfully');
              }
         }
        
    }
    
    public function destroy($id){
        
         $single_record = Price::find($id);
         
         if($single_record){
             
              $delete = $single_record->delete();
             
              
              if($delete){
                  
                  return redirect()->route('prices.show')->with('error' , 'Price Deleted Successfully');
              }
         }
        
    }
}
