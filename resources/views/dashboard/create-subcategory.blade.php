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

    SubCategory
    
@endsection

@section('content-title')

    SubCategory Form
    
@endsection


@section('card-title')

    Add New SubCategory 
    
@endsection


@section('content-body')

    <div class="basic-form">

        <form action="{{ route('subcategories.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
            
             <div class="form-group">
                <input type="text" class="form-control input-default"  placeholder="main_title" name="m_title">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default"  placeholder="subcategory_name" name="sc_name">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="subcategory_Id" name="sc_id">
            </div>

            <div class="form-group">
                <select class="form-control input-default" name="c_id">
                    <option value="" disabled>Choose Category</option>

                    @foreach ($show1 as $show_select)

                        <option value="{{ $show_select->id }}">{{ $show_select->category_id }}</option>
                        
                    @endforeach
    
                </select>
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="rating" name="sc_rating">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="class" name="sc_class">
            </div>
            
             <div class="form-group">
                <select class="form-control input-default" name="p_id">
                    <option value="" disabled>Choose Price</option>
                    
                     @foreach ($show2 as $show_select)

                        <option value="{{ $show_select->id }}">{{ $show_select->price_id }}</option>
                        
                    @endforeach
    
                </select>
            </div>
            
             
            <div class="form-group">
                <input type="file" class="form-control input-default" name="sc_image">
            </div>
            
            @error('sc_image')
            
            <div class="alert alert-danger" role="alert">
                
                {{ $message }}
             
            </div>
            
            @enderror


            <div class="form-btn">

                <button type="submit" class="btn btn-primary mb-2" style="font-size: 14.5px !important">Add SubCategory</button>

            </div>
           
        </form>
    </div>
    
@endsection