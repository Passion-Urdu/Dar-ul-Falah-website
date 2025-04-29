@extends('dashboard/master-layout')

@section('main-title')

    View Users
    
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

    Users Record
    
@endsection

@section('add-action')

    <a href="{{ route('users.create') }}" class="btn btn-success"><i class="fa fa-solid fa-plus me-2"></i> Add New</a>
    
@endsection

@section('card-title')

    Users Table
    
@endsection


@section('content-body')

    <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead style="background: #7571f9 ; color: #fff">
                <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>user_id</th>
                    <th>user_ip</th>
                    <th>password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($show as $show_user)

                    <tr>
                        <th style="vertical-align: middle">{{ $show_user->id }}</th>
                        <td>{{  $show_user->name }}</td>
                        <td>{{  $show_user->user_id }}</td>
                        <td>{{  $show_user->user_ip }}</td>
                        <td>{{  $show_user->password }}</td>
                        <td class="d-flex justify-content-center">
                            <li><a href="{{ route('users.edit' , $show_user->id) }}" class="btn btn-primary" style="margin-right: 10px"><i class="fa fa-pencil"></i></a></li>

                            <form action="{{ route('users.destroy' , $show_user->id ) }}" method="POST">

                                @csrf

                                @method('DELETE')

                                <li><button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button></li>

                            </form>
                        </td>
                    </tr>
                    
                @endforeach 
               
            </tbody>
        </table>
    </div>

@endsection