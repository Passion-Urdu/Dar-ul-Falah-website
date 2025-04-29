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

    Package Form
    
@endsection


@section('card-title')

    Update Package
    
@endsection


@section('content-body')

    @if($single_record)
    

        <div class="basic-form">
    
            <form action="{{ route('packages.update' , $single_record->id) }}" method="POST">
                
                @csrf
                
                @method('PUT')
    
                <div class="form-group">
                    <input type="text" class="form-control input-default update-default" placeholder="Name" value="{{ $single_record->name }}" name="p_name">
                </div>
    
                <div class="form-group">
                    <input type="number" class="form-control input-default update-default" placeholder="Phone_number" value="{{ $single_record->phone }}" name="p_phone">
                </div>
    
                <div class="form-group">
                    <input type="text" class="form-control input-default update-default" placeholder="City" value="{{ $single_record->city }}"  name="p_city">
                </div>
                
               <div class="form-group">
                    <select class="form-control input-default update-default" name=p_cat1>
                        <option value="" disabled>Choose Category 1</option>
                        
                         @if($category)
                        
                            @foreach($category as $show_category)
                            
                            @if($single_record->category_1 == $show_category->name)
                            
                                @php
                                
                                    $select = 'selected';
                                    
                                @endphp
                                
                            @else
                            
                                
                                @php
                                
                                    $select = '';
                                    
                                @endphp
                            
                             @endif
                            
                             <option value="{{ $show_category->name }}" {{ $select }}>{{ $show_category->name }}</option>
                             
                            
                            @endforeach
                            
                        
                        @endif
                        
                    </select>
                </div>
                
                <div class="form-group">
                    <select class="form-control input-default update-default" name=p_cat2>
                        <option value="" disabled>Choose Category 2</option>
                        
                         @if($category)
                        
                            @foreach($category as $show_category)
                            
                                @if($single_record->category_2 == $show_category->name)
                                
                                    @php
                                    
                                        $select = 'selected';
                                        
                                    @endphp
                                    
                                @else
                                
                                    
                                    @php
                                    
                                        $select = '';
                                        
                                    @endphp
                                
                                 @endif
                            
                             <option value="{{ $show_category->name }}" {{ $select }}>{{ $show_category->name }}</option>
                            
                            @endforeach
                        
                        @endif
                        
                    </select>
                </div>
                
                <div class="form-group">
                    <select class="form-control input-default update-default" name=p_subcat1>
                        <option value="" disabled>Choose SubCategory 1</option>
                        
                         @if($subcategory)
                        
                            @foreach($subcategory as $show_subcategory)
                            
                                @if($single_record->sub_category_1 == $show_subcategory->name)
                                
                                    @php
                                    
                                        $select = 'selected';
                                        
                                    @endphp
                                    
                                @else
                                
                                    @php
                                    
                                        $select = '';
                                        
                                    @endphp
                                
                                @endif
                            
                             <option value="{{ $show_subcategory->name }}" {{ $select }}>{{ $show_subcategory->name }}</option>
                            
                            @endforeach
                        
                        @endif
                        
                    </select>
                </div>
                
                 <div class="form-group">
                    <input type="text" class="form-control input-default update-default" placeholder="SubCategory_1_rating" value="{{ $single_record->sub_category1_rating }}"  name="p_subcat1_rate">
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control input-default update-default" placeholder="SubCategory_1_class" value="{{ $single_record->sub_category1_class }}"  name="p_subcat1_class">
                </div>
                
                <div class="form-group">
                    <select class="form-control input-default update-default" name=p_subcat2>
                        <option value="" disabled>Choose SubCategory 2</option>
                        
                         @if($subcategory)
                        
                            @foreach($subcategory as $show_subcategory)
                            
                                @if($single_record->sub_category_2 == $show_subcategory->name)
                                    
                                        @php
                                        
                                            $select = 'selected';
                                            
                                        @endphp
                                        
                                    @else
                                    
                                        @php
                                        
                                            $select = '';
                                            
                                        @endphp
                                    
                                @endif
                                
                             <option value="{{ $show_subcategory->name }}" {{ $select }}>{{ $show_subcategory->name }}</option>
                            
                            @endforeach
                        
                        @endif
                        
                    </select>
                </div>
                
                 <div class="form-group">
                    <input type="text" class="form-control input-default update-default" placeholder="SubCategory_2_rating" value="{{ $single_record->sub_category2_rating }}"  name="p_subcat2_rate">
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control input-default update-default" placeholder="SubCategory_2_class" value="{{ $single_record->sub_category2_class }}"  name="p_subcat2_class">
                </div>
                
                <div class="form-group">
                    <input type="number" class="form-control input-default update-default" placeholder="makkah_nights" value="{{ $single_record->mecca_nights }}" name="p_makkah">
                </div>
                
                <div class="form-group">
                    <input type="number" class="form-control input-default update-default" placeholder="madina_nights" value="{{ $single_record->madina_nights }}" name="p_madina">
                </div>
                
                 <div class="form-group">
                    <input type="text" class="form-control input-default update-default" placeholder="Sharing_rate" value="{{ $single_record->sharing_rate }}"  name="p_sharing">
                </div>
                
                  <div class="form-group">
                    <input type="text" class="form-control input-default update-default" placeholder="Quad_rate" value="{{ $single_record->quad_rate }}"  name="p_quad">
                </div>
    
    
                  <div class="form-group">
                    <input type="text" class="form-control input-default update-default" placeholder="Triple_rate" value="{{ $single_record->triple_rate }}"  name="p_triple">
                </div>
    
    
                  <div class="form-group">
                    <input type="text" class="form-control input-default update-default" placeholder="Double_rate" value="{{ $single_record->double_rate }}"  name="p_double">
                </div>
    
    
                <div class="form-btn">
    
                    <button type="submit" class="btn btn-success mb-2" style="font-size: 14.5px !important">Update Package</button>
    
                </div>
               
            </form>
        </div>
    
    @endif
    
@endsection