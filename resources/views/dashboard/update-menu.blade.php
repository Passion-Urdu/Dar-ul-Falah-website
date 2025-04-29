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

    Update Menu
    
@endsection


@section('content-body')

    <div class="basic-form">

        <form action="{{ route('menus.update' , $show_single['id']) }}" method="POST">

            @csrf

            @method('PUT')

            <div class="form-group">
                <input type="text" class="form-control input-default update-default" placeholder="Name" value="{{ $show_single['menu_name'] }}" name="m_name">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default update-default" placeholder="Menu Id" value="{{ $show_single['menu_id'] }}" name="m_id" disabled>
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default update-default" placeholder="Url" value="{{ $show_single['menu_url'] }}"  name="m_url">
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

                <button type="submit" class="btn btn-success mb-2" style="font-size: 14.5px !important">Update Menu</button>

            </div>
           
        </form>
    </div>
    
@endsection