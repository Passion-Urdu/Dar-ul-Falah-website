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

    Package
    
@endsection

@section('content-title')

    Packages Record
    
@endsection

@section('add-action')

    <a href="{{ route('assets.create') }}" class="btn btn-success"><i class="fa fa-solid fa-plus me-2"></i> Add New</a>
    
@endsection

@section('card-title')

    Packages Table
    
@endsection


@section('content-body')

    <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead style="background: #7571f9 ; color: #fff">
                <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>phone_no</th>
                    <th>city</th>
                    <th>category_1</th>
                    <th>category_2</th>
                    <th>sub_category_1</th>
                    <th>sub_category1_rating</th>
                    <th>sub_category1_class</th>
                    <th>sub_category_2</th>
                    <th>sub_category2_rating</th>
                    <th>sub_category2_class</th>
                    <th>makkah_nights</th>
                    <th>madina_nights</th>
                    <th>airline_ticket</th>
                    <th>sharing_rate</th>
                    <th>quad_rate</th>
                    <th>double_rate</th>
                    <th>triple_rate</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($show as $show_package)

                    <tr>
                        <th style="vertical-align: middle">{{ $show_package->id }}</th>
                        <td>{{ $show_package->name }}</td>
                        <td>{{ $show_package->phone }}</td>
                        <td>{{ $show_package->city }}</td>
                        <td>{{ $show_package->category_1 }}</td>
                        <td>{{ $show_package->category_2}}</td>
                        <td>{{ $show_package->sub_category_1 }}</td>
                        <td>{{ $show_package->sub_category1_rating }}</td>
                        <td>{{ $show_package->sub_category1_class }}</td>
                        <td>{{ $show_package->sub_category_2 }}</td>
                        <td>{{ $show_package->sub_category2_rating }}</td>
                        <td>{{ $show_package->sub_category2_class }}</td>
                        <td>{{ $show_package->mecca_nights }}</td>
                        <td>{{ $show_package->madina_nights }}</td>
                        <td>{{ $show_package->airline_ticket }}</td>
                        <td>{{ $show_package->sharing_rate }}</td>
                        <td>{{ $show_package->quad_rate }}</td>
                        <td>{{ $show_package->triple_rate }}</td>
                        <td>{{ $show_package->double_rate }}</td>
                        <td class="action-list">
                            <li><a href="{{ route('packages.edit' , $show_package->id ) }}" class="btn btn-primary" style="margin-right: 10px"><i class="fa fa-pencil"></i></a></li>

                            <form action=" {{ route('packages.destroy' , $show_package->id) }}" method="POST">
                                
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