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

    Price
    
@endsection

@section('content-title')

    Price Form
    
@endsection


@section('card-title')

    Update Price
    
@endsection


@section('content-body')

    <div class="basic-form">

        <form action="{{ route('prices.update' , $single_record->id ) }}" method="POST">
            
            @csrf
            
            @method('PUT')
            
            @if($single_record)
            
          
            <div class="form-group">
                <input type="text" class="form-control input-default"  placeholder="price_id" value="{{ $single_record->price_id }}" name="p_id" disabled>
            </div>

            <div class="form-group">
                <input type="number" class="form-control input-default" placeholder="price_amount" value="{{ $single_record->price_amount }}" name="p_amount">
            </div>
            
            @endif

            <div class="form-btn">

                <button type="submit" class="btn btn-success mb-2" style="font-size: 14.5px !important">Update Price</button>

            </div>
           
        </form>
    </div>
    
@endsection