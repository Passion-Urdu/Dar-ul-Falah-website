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

    Update Slider
    
@endsection


@section('content-body')

    <div class="basic-form">

        <form action="{{ route('sliders.update' , $single_record->id) }}" method="POST" enctype="multipart/form-data">

            @csrf

            @method('PUT')

            <div class="form-group">
                <input  type="file" class="form-control input-default"  onchange="document.querySelector('#output').src = window.URL.createObjectURL(this.files[0])" name="s_image">
            </div>
            
            @error('s_image')
            
                <div class="alert alert-danger" role="alert">
                    
                    {{ $message }}
                
                </div>
            
            @enderror

            <div class="mb-4 img_box">

                <img id="output" src="{{ asset('storage/'.$single_record->image) }}" alt="slides" width="200px" height="200px">

            </div>

            <div class="form-btn">

                <button type="submit" class="btn btn-success mb-2" style="font-size: 14.5px !important">Update</button>

            </div>
           
        </form>
    </div>
    
@endsection