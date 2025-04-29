@extends('dashboard/master-layout')

@section('main-title')

    Update Users
    
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

    Update User
    
@endsection


@section('content-body')

    <div class="basic-form">

        <form action="{{ route('users.update' , $single_record->id) }}" method="POST">

            @csrf

            @method('PUT')

            <div class="form-group">
                <input type="text" class="form-control input-default update-default"  placeholder="name" value="{{ $single_record->name }}" name="name">
            </div>

            <div class="form-group">
                <input type="text" class="form-control"  placeholder="user_id" value="{{ $single_record->user_id }}" name="u_id">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-default update-default" placeholder="password"  name="password">
            </div>

            <div class="form-btn">

                <button type="submit" class="btn btn-success mb-2" style="font-size: 14.5px !important">Update User</button>

            </div>
           
        </form>
    </div>
    
@endsection


@push('scripts')

    <script>

        $(document).ready(function(){

            $("input[placeholder = 'user_id']").attr('readonly' , true);

        });

    </script>
    
@endpush