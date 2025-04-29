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

    Menu
    
@endsection

@section('content-title')

    Menu Form
    
@endsection


@section('card-title')

    Add New Menu
    
@endsection


@section('content-body')

    <div class="basic-form">

        <form action="{{ route('menus.store') }}" method="POST">

            @csrf

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="Name" name="m_name">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="Menu Id" name="m_id">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="Url"  name="m_url">
            </div>
{{-- 
            <div class="form-group">
                <select class="form-control input-default"  name="m_status">
                    <option>Choose Menu Status</option>
                    <option value="1">Enabled</option>
                    <option value="0">Disabled</option>
                </select>
            </div> --}}

            <div class="form-btn">

                <button type="submit" class="btn btn-primary mb-2" style="font-size: 14.5px !important">Add Menu</button>

            </div>
           
        </form>
    </div>
    
@endsection