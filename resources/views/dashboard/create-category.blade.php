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

    Add New Category
    
@endsection


@section('content-body')

    <div class="basic-form">

        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
            
            <div class="form-group">
                <input type="text" class="form-control input-default"  placeholder="main_title" name="m_title">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default"  placeholder="category_name" name="c_name">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="category_id" name="c_id">
            </div>
            
            <div class="form-group">
                <input type="file" class="form-control input-default" name="cat_image">
            </div>
            
            @error('cat_image')
            
            <div class="alert alert-danger" role="alert">
                
                {{ $message }}
             
            </div>
            
            @enderror

            <div class="form-btn">

                <button type="submit" class="btn btn-primary mb-2" style="font-size: 14.5px !important">Add Category</button>

            </div>
           
        </form>
    </div>
    
@endsection