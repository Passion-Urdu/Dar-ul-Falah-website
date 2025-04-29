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

    Banner
    
@endsection

@section('content-title')

    Banners Record
    
@endsection

@section('add-action')

    <a href="{{ route('banners.create') }}" class="btn btn-success"><i class="fa fa-solid fa-plus me-2"></i> Add New</a>
    
@endsection

@section('card-title')

    Banners Table
    
@endsection


@section('content-body')

    <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead style="background: #7571f9 ; color: #fff">
                <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($show as $show_banner)

                    <tr>
                        <th style="vertical-align: middle">{{ $show_banner->id }}</th>
                        <td><img src="{{ asset('storage/'.$show_banner->image) }}" alt="slide" width="200px" height="150px"></td>
                        <td>{{ $show_banner->title }}</td>
                        <td>{{ $show_banner->amount }}</td>
                        <td class="action-list">
                            <li><a href="{{ route('banners.edit' , $show_banner->id) }}" class="btn btn-primary" style="margin-right: 10px"><i class="fa fa-pencil"></i></a></li>

                            <form action="{{ route('banners.destroy' , $show_banner->id) }}" method="POST">

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