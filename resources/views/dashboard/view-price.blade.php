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

    Price

@endsection

@section('content-title')

    Prices Record
    
@endsection

@section('add-action')

    <a href="" class="btn btn-success"><i class="fa fa-solid fa-plus me-2"></i> Add New</a>
    
@endsection

@section('card-title')

    Prices Table
    
@endsection


@section('content-body')

    <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead style="background: #7571f9 ; color: #fff">
                <tr>
                    <th>Id</th>
                    <th>price_Id</th>
                    <th>price_amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($show as $show_price)

                    <tr>
                        <th style="vertical-align: middle">{{ $show_price->id }}</th>
                        <td>{{ $show_price->price_id }}</td>
                        <td>{{ $show_price->price_amount }}</td>
                        <td class="d-flex justify-content-center">
                            <li><a href="{{ route('prices.edit' , $show_price->id) }}" class="btn btn-primary" style="margin-right: 10px"><i class="fa fa-pencil"></i></a></li>

                            <form action="{{ route('prices.destroy' , $show_price->id)  }}" method="POST">
                                
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