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

    Categories Record
    
@endsection

@section('add-action')

    <a href="{{ route('categories.create') }}" class="btn btn-success"><i class="fa fa-solid fa-plus me-2"></i> Add New</a>
    
@endsection

@section('card-title')

    Categories Table
    
@endsection


@section('content-body')

    <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead style="background: #7571f9 ; color: #fff">
                <tr>
                    <th>Id</th>
                     <th>main_title</th>
                    <th>name</th>
                    <th>category_Id</th>
                    <th>category_image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($show as $show_category)

                    <tr>
                        <th style="vertical-align: middle">{{ $show_category->id }}</th>
                        <td>{{ $show_category->main_title }}</td>
                        <td>{{ $show_category->name }}</td>
                        <td>{{ $show_category->category_id }}</td>
                         <td><img src="{{ asset('storage/'.$show_category->category_image) }}" alt="category" width="200px" height="150px"></td>
                        <td class="d-flex justify-content-center mt-5">
                            <li><a href="{{ route('categories.edit' , $show_category->id) }}" class="btn btn-primary" style="margin-right: 10px"><i class="fa fa-pencil"></i></a></li>

                            <form action="{{ route('categories.destroy' , $show_category->id) }}" method="POST">

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