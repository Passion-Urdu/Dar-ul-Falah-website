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

    Package-Assets Record
    
@endsection

@section('add-action')

    <a href="{{ route('assets.create') }}" class="btn btn-success"><i class="fa fa-solid fa-plus me-2"></i> Add New</a>
    
@endsection

@section('card-title')

    Package-Assets Table
    
@endsection


@section('content-body')

    <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead style="background: #7571f9 ; color: #fff">
                <tr>
                    <th>Id</th>
                    <th>asset_Id</th>
                    <th>Image</th>
                     <th>Menu_id</th>
                    <th>ContentTitle</th>
                    <th>Title</th>
                    <th>SubTitle</th>
                    <th>Package_id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($show as $show_asset)

                    <tr>
                        <th style="vertical-align: middle">{{ $show_asset->id }}</th>
                        <td>{{ $show_asset->asset_id }}</td>
                        <td><img src="{{ asset('storage/'.$show_asset->image) }}" alt="slide" width="200px" height="150px"></td>
                        <td>{{ $show_asset->menu_id }}</td>
                        <td>{{ $show_asset->content_title }}</td>
                        <td>{{ $show_asset->title }}</td>
                        <td>{{ $show_asset->sub_title }}</td>
                        <td>{{ "pkg ".$show_asset->pkg_id }}</td>
                        <td class="action-list">
                            <li><a href="{{ route('assets.edit' , $show_asset->id) }}" class="btn btn-primary" style="margin-right: 10px"><i class="fa fa-pencil"></i></a></li>

                            <form action="{{ route('assets.destroy' , $show_asset->id) }}" method="POST">

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