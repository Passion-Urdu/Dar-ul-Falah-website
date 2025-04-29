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

    Category
    
@endsection

@section('content-title')

    Category Form
    
@endsection


@section('card-title')

    Update Category
    
@endsection


@section('content-body')

    <div class="basic-form">

        <form action="{{ route('categories.update' ,  $single_record->id) }}" method="POST" enctype="multipart/form-data">

            @csrf

            @method('PUT')
            
             <div class="form-group">
                <input type="text" class="form-control input-default"  placeholder="main_title" value="{{ $single_record->main_title }}" name="m_title">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default"  placeholder="category_name" value="{{ $single_record->name }}" name="c_name">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="category_id" value="{{ $single_record->category_id }}" name="c_id" disabled>
            </div>
            
            <div class="form-group">
                <input type="file" class="form-control input-default" name="cat_image" onchange="document.querySelector('#output').src = window.URL.createObjectURL(this.files[0])">
            </div>
            
            @error('cat_image')
            
            <div class="alert alert-danger" role="alert">
                
                {{ $message }}
             
            </div>
            
            @enderror
            
             <div class="mt-3 mb-4">
                <img src="{{ asset('storage/'.$single_record->category_image ) }}" alt="categroy" width="200px" height="200px" id="output">
            </div>

            <div class="form-btn">

                <button type="submit" class="btn btn-success mb-2" style="font-size: 14.5px !important">Update Category</button>

            </div>
           
        </form>
    </div>
    
@endsection