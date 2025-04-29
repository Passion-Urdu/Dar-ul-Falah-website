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

    Add New Price
    
@endsection


@section('content-body')

    <div class="basic-form">

        <form action="{{ route('prices.store') }}" method="POST">

            @csrf

            <div class="form-group">
                <input type="text" class="form-control input-default"  placeholder="price_id" name="p_id">
            </div>

            <div class="form-group">
                <input type="number" class="form-control input-default" placeholder="price_amount" name="p_amount">
            </div>

            <div class="form-btn">

                <button type="submit" class="btn btn-primary mb-2" style="font-size: 14.5px !important">Add Price</button>

            </div>
           
        </form>
    </div>
    
@endsection