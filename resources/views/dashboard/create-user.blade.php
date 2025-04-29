@extends('dashboard/master-layout')

@section('main-title')

    Create Users
    
@endsection

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

    User
    
@endsection

@section('content-title')

    User Form
    
@endsection


@section('card-title')

    Add New User
    
@endsection


@section('content-body')

    <div class="basic-form">

        <form action="{{ route('users.store') }}" method="POST">

            @csrf

            <div class="form-group">
                <input type="text" class="form-control input-default"  placeholder="name" name="name">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="user_id" name="u_id">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default" placeholder="password" name="password">
            </div>
            

            <div class="form-btn">

                <button type="submit" class="btn btn-primary mb-2" style="font-size: 14.5px !important">Add User</button>

            </div>
           
        </form>
    </div>
    
@endsection