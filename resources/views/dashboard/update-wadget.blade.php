@extends('dashboard/master-layout')

<style>

.breadcrumb-item.active:before{

    display: inline-block !important;
    
}

.content-title{

    display: flex !important;
}

.cc-body{

    display: block !important;
}

</style>

@section('breadcrumb-title-1')

    Dashboard
    
@endsection

@section('breadcrumb-title-2')

    Wadge
    
@endsection

@section('content-title')

    Wadge Form
    
@endsection


@section('card-title')

    Update Wadge
    
@endsection


@section('content-body')

    <div class="basic-form">

        <form action="" method="">
           
            
            
          
            <div class="form-group">
                <input type="text" class="form-control input-default"  placeholder="wadge_id" value="" name="w_id" disabled>
            </div>

            <div class="form-group">
                <input type="number" class="form-control input-default" placeholder="visa_charges" value="" name="v_charge">
            </div>
            
             <div class="form-group">
                <input type="number" class="form-control input-default" placeholder="conversion_rate" value="" name="c_rate">
            </div>
            
            
             <div class="form-group">
                <input type="number" class="form-control input-default" placeholder="package_profit" value="" name="p_profit">
            </div>
            
            
          

            <div class="form-btn">

                <button type="submit" class="btn btn-success mb-2" style="font-size: 14.5px !important">Update Price</button>

            </div>
           
        </form>
    </div>
    
@endsection