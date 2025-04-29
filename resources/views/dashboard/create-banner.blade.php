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

    Banner
    
@endsection

@section('content-title')

    Banner Form
    
@endsection


@section('card-title')

    Add New Banner
    
@endsection


@section('content-body')

    <div class="basic-form">

        <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <input type="file" class="form-control input-default" name="b_image">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="banner_title" name="b_title">
            </div>

            <div class="form-group">
                <input type="number" class="form-control input-default" placeholder="banner_amount" name="b_amount">
            </div>

            <div class="form-btn">

                <button type="submit" class="btn btn-primary mb-2" style="font-size: 14.5px !important">Add Banner</button>

            </div>
           
        </form>
    </div>
    
@endsection