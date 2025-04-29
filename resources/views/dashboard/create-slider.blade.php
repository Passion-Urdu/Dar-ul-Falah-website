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

    Slider
    
@endsection

@section('content-title')

    Slider Form
    
@endsection


@section('card-title')

    Add New Slider
    
@endsection


@section('content-body')

    <div class="basic-form">

        <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <input type="file" class="form-control input-default" name="s_image">
            </div>

            <div class="form-btn">

                <button type="submit" class="btn btn-primary mb-2" style="font-size: 14.5px !important">Add Slider</button>

            </div>
           
        </form>
    </div>
    
@endsection