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

    Package-Asset
    
@endsection

@section('content-title')

    Package-Asset Form
    
@endsection


@section('card-title')

    Update Package-Asset
    
@endsection


@section('content-body')

    <div class="basic-form">

        <form action="{{ route('assets.update' , $single_record->id) }}" method="POST" enctype="multipart/form-data">

            @csrf

            @method('PUT')

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="asset_id"  value="{{ $single_record->asset_id }}" name="as_id" disabled>
            </div>

            <div class="form-group">
                <input  type="file" class="form-control input-default"  onchange="document.querySelector('#output').src = window.URL.createObjectURL(this.files[0])" name="at_image">
            </div>
            
            @error('at_image')
            
            <div class="alert alert-danger" role="alert">
                
             {{ $message }}
              
            </div>
            
            @enderror

            <div class="form-group">
                <select class="form-control input-default" name="m_id">

                    <option value="" disabled>Choose Category</option>

                    @foreach ($select as $menu_select)

                        @if($single_record->m_id == $menu_select->id)

                            @php

                                $select = 'selected';
        
                            @endphp

                        @else

                            @php

                                $select = '';
        
                            @endphp

                        @endif

                        <option value="{{ $menu_select->id }}" {{ $select }}>{{ $menu_select->menu_id }}</option>
                        
                    @endforeach
                  
                </select>
            </div>

            <div class="mb-4 img_box">

                <img id="output" src="{{ asset('storage/'.$single_record->image) }}" alt="slides" width="200px" height="200px">

            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="content_title" value="{{ $single_record->content_title }}" name="ac_title">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="asset_title" value="{{ $single_record->title }}" name="at_title">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="asset_subtitle" value="{{ $single_record->sub_title }}" name="at_subtitle">
            </div>

            <div class="form-btn">

                <button type="submit" class="btn btn-success mb-2" style="font-size: 14.5px !important">Update</button>

            </div>
           
        </form>
    </div>
    
@endsection