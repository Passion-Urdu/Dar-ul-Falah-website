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

    Menu Records
    
@endsection

@section('add-action')

    <a href="{{ route('menus.create') }}" class="btn btn-success"><i class="fa fa-solid fa-plus me-2"></i> Add New</a>
    
@endsection

@section('card-title')

    Menu Table
    
@endsection


@section('content-body')

    <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead style="background: #7571f9 ; color: #fff">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Menu_Id</th>
                    <th>Url</th>
                    {{-- <th>Status</th> --}}
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($show as $show_menu)

                    <tr>
                        <th style="vertical-align: middle">{{ $show_menu->id}}</th>
                        <td>{{ $show_menu->menu_name}}</td>
                        <td>{{ $show_menu->menu_id}}</td>
                        <td>{{ $show_menu->menu_url}}</td>
                        {{-- <td><a href="" class="btn btn-sm btn-primary">Enabled</a></td> --}}
                        <td class="color-primary"> 
                            <ul class="d-flex justify-content-center mt-3">
                                <li><a href="{{ route('menus.edit' , $show_menu->id) }}" class="btn btn-primary" style="margin-right: 10px"><i class="fa fa-pencil"></i></a></li>

                                <form action="{{ route('menus.destroy' , $show_menu->id) }}" method="POST">

                                    @csrf

                                    @method('DELETE')

                                    <li><button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button></li>

                                </form>
                            </ul>
                        </td>
                    </tr>
                    
                @endforeach

            </tbody>
        </table>
    </div>

@endsection