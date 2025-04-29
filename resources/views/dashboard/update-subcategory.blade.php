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

    Update SubCategory 
    
@endsection


@section('content-body')

    <div class="basic-form">

        <form action="{{ route('subcategories.update' , $single_subcategory->id) }}" method="POST" enctype="multipart/form-data">

            @csrf

            @method('PUT')
            
             <div class="form-group">
                <input type="text" class="form-control input-default"  placeholder="main_title" value="{{ $single_subcategory->main_title }}" name="m_title">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default"  placeholder="subcategory_name" value="{{ $single_subcategory->name }}" name="sc_name">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="subcategory_Id" value="{{ $single_subcategory->subcategory_id }}" name="sc_id" disabled>
            </div>

            <div class="form-group">
                <select class="form-control input-default" name="c_id">
                    <option value="" disabled>Choose Category</option>

                    @foreach ($show1 as $show_category)
                        
                        @if($single_subcategory->cate_id == $show_category->id)

                            @php
                                
                                $select = 'selected';

                            @endphp

                            @else

                            @php
                                
                                $select = '';

                            @endphp

                        @endif

                        <option value="{{ $show_category->id }}" {{ $select }}>{{ $show_category->category_id }}</option>

                    @endforeach
    
                </select>
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="rating"  value="{{ $single_subcategory->rating  }}" name="sc_rating">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="class" value="{{ $single_subcategory->class  }}" name="sc_class">
            </div>
            
             <div class="form-group">
                <select class="form-control input-default" name="p_id">
                    <option value="" disabled>Choose Price</option>

                    @foreach ($show2 as $show_price)
                        
                        @if($single_subcategory->pr_id == $show_price->id)

                            @php
                                
                                $select = 'selected';

                            @endphp

                            @else

                            @php
                                
                                $select = '';

                            @endphp

                        @endif

                        <option value="{{ $show_price->id }}" {{ $select }}>{{ $show_price->price_id }}</option>

                    @endforeach
    
                </select>
            </div>
            
            <div class="form-group">
                <input type="file" class="form-control input-default" name="sc_image" onchange="document.querySelector('#output').src = window.URL.createObjectURL(this.files[0])">
            </div>
            
            @error('sc_image')
            
            <div class="alert alert-danger" role="alert">
                
                {{ $message }}
             
            </div>
            
            @enderror
            
             <div class="mt-3 mb-4">
                <img src="{{ asset('storage/'.$single_subcategory->subcategory_image ) }}" alt="categroy" width="200px" height="200px" id="output">
            </div>

            <div class="form-btn">

                <button type="submit" class="btn btn-primary mb-2" style="font-size: 14.5px !important">Update SubCategory</button>

            </div>
           
        </form>
    </div>
    
@endsection