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

    Add New Package-Asset
    
@endsection


@section('content-body')

    <div class="basic-form">

        <form action="{{ route('assets.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="asset_id" name="as_id">
            </div>

            <div class="form-group">
                <input type="file" class="form-control input-default" name="at_image">
            </div>
            
            @error('at_image')
            
            <div class="alert alert-danger" role="alert">
                
              {{ $message }}
              
            </div>
            
            @enderror

            <div class="form-group">
                <select class="form-control input-default" name="m_id">

                    <option value="" disabled>Choose Menu Id</option>

                    @foreach ($select as $menu_select)

                        <option value="{{ $menu_select->id }}" >{{ $menu_select->menu_id }}</option>
                        
                    @endforeach
                  
                </select>
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="content_title" name="ac_title">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="asset_title" name="at_title">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="asset_subtitle" name="at_subtitle">
            </div>
            
             <div class="form-group">
                <select class="form-control input-default" name="pkg_id">

                    <option value="" disabled>Choose Pakage Id</option>
                        
                    
                      @foreach ($package as $select_package)
                        

                        <option value="{{ $select_package->id }}" >{{  "Package ".$select_package->id }}</option>
                        
                      @endforeach
                  
                </select>
            </div>

            <div class="form-btn">

                <button type="submit" class="btn btn-primary mb-2" style="font-size: 14.5px !important">Add Package Asset</button>

            </div>
           
        </form>
    </div>
    
@endsection