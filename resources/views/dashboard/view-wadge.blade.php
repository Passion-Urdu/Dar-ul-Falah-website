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

    Wadge

@endsection

@section('content-title')

    Wadges Record
    
@endsection

@section('add-action')

    <a href="" class="btn btn-success"><i class="fa fa-solid fa-plus me-2"></i> Add New</a>
    
@endsection

@section('card-title')

    Wadges Table
    
@endsection


@section('content-body')

    <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead style="background: #7571f9 ; color: #fff">
                <tr>
                    <th>Id</th>
                    <th>wadge_id</th>
                    <th>Visa Charges</th>
                    <th>Conversion Rate</th>
                    <th>Double Profit</th>
                    <th>Triple Profit</th>
                    <th>Quad Profit</th>
                    <th>Quint Profit</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                
                @if($show_wadge)

                    <tr>
                        <th style="vertical-align: middle">{{ $show_wadge->id }}</th>
                        <td>{{ $show_wadge->wadge_id }}</td>
                        <td>{{ $show_wadge->visa_charges }}</td>
                         <td>{{ $show_wadge->conversion_rate }}</td>
                          <td>{{ $show_wadge->package_profit1 }}</td>
                          <td>{{ $show_wadge->package_profit2 }}</td>
                          <td>{{ $show_wadge->package_profit3 }}</td>
                          <td>{{ $show_wadge->package_profit4 }}</td>
                        <td class="d-flex justify-content-center">
                            <li><a href="{{ route('wadges.edit' , $show_wadge->id) }}" class="btn btn-primary" style="margin-right: 10px"><i class="fa fa-pencil"></i></a></li>

                            <form action="{{ route('wadges.destroy' , $show_wadge->id) }}" method="POST">
                                
                                @csrf
                                
                                @method('DELETE')

                            <li><button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button></li>

                            </form>

                        </td>

                    </tr>
                    
                @endif
                
            </tbody>
        </table>
    </div>

@endsection