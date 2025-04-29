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

    SubCategories Record
    
@endsection

@section('add-action')

    <a href="{{ route('subcategories.create') }}" class="btn btn-success"><i class="fa fa-solid fa-plus me-2"></i> Add New</a>
    
@endsection

@section('card-title')

    SubCategories Table
    
@endsection


@section('content-body')

    <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead style="background: #7571f9 ; color: #fff">
                <tr>
                    <th>Id</th>
                    <th>main_title</th>
                    <th>name</th>
                    <th>subcategory_id</th>
                    <th>cate_id</th>
                    <th>rating</th>
                    <th>class</th>
                     <th>price_id</th>
                      <th>subcategory_image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($show as $show_subcate)

                    <tr>
                        <th style="vertical-align: middle">{{ $show_subcate->id }}</th>
                        <td>{{ $show_subcate->main_title  }}</td>
                        <td>{{ $show_subcate->name  }}</td>
                        <td>{{ $show_subcate->subcategory_id }}</td>
                        <td>{{ $show_subcate->category_id }}</td>
                        <td>{{$show_subcate->rating }}</td>
                        <td>{{$show_subcate->class }}</td>
                         <td>{{$show_subcate->price_id }}</td>
                         <td><img src="{{ asset('storage/'.$show_subcate->subcategory_image) }}" alt="category" width="200px" height="150px"></td>
                        <td class="d-flex justify-content-center mt-5">
                            <li><a href="{{ route('subcategories.edit' , $show_subcate->id) }}" class="btn btn-primary" style="margin-right: 10px"><i class="fa fa-pencil"></i></a></li>

                            <form action="{{ route('subcategories.destroy' , $show_subcate->id) }}" method="POST">

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