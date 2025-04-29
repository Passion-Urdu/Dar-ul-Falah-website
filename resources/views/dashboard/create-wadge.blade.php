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

    Add New Wadge
    
@endsection


@section('content-body')

    <div class="basic-form">

        <form action="{{ route('wadges.store') }}" method="POST">
            
            @csrf

            <div class="form-group">
                <input type="text" class="form-control input-default"  placeholder="wadge_id" name="w_id">
            </div>

            <div class="form-group">
                <input type="number" class="form-control input-default" placeholder="visa_charges" name="v_charge">
            </div>
            
            @error('v_charge')
            
                    <div class="alert alert-danger" role="alert">
                     
                     {{ $message }}
                     
                    </div>
            
            @enderror
            
            <div class="form-group">
                <input type="number" class="form-control input-default" placeholder="conversion_rate" name="c_rate">
            </div>
            
             <div class="form-group">
                <input type="number" class="form-control input-default" placeholder="package_profit1" name="p_profit1">
            </div>
            
             <div class="form-group">
                <input type="number" class="form-control input-default" placeholder="package_profit2" name="p_profit2">
            </div>
            
             <div class="form-group">
                <input type="number" class="form-control input-default" placeholder="package_profit3" name="p_profit3">
            </div>
            
             <div class="form-group">
                <input type="number" class="form-control input-default" placeholder="package_profit4" name="p_profit4">
            </div>

            <div class="form-btn">

                <button type="submit" class="btn btn-primary mb-2" style="font-size: 14.5px !important">Add Wadge</button>

            </div>
           
        </form>
    </div>
    
@endsection