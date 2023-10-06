@extends('layouts.front')
<link rel="stylesheet" href="{{ asset('frontend/css/card.css') }}">
@section('title')
    welocome to Tec com shop

@endsection

@section('content')

    @include('layouts.inc.slider')
    <div class="py-5">
        <div class="container">
            <div class="row">
              <h1 style="text-align: center">TRENDING PRODUCTS</h1><hr/><br/><br/>
              <div class="row row-cols-1 row-cols-md-2 g-4 mt-0">
              @foreach($product_details as $products)
               @if($products->trending==1)
               
                <div class="col-md-3 mb-0">
                    
                    <div class="card h-70 container-fluid bg-trasparent my-4 p-3 shadow-sm">
                        <div class="card-header">
                            @if($products->quantity>0)
                               <div class="badge bg-success col-12">In Stock</div>
                            @else
                               <span class="badge bg-danger col-12">Out of Stock</span>
                            @endif
                          </div>
                        <img src="{{asset('assets/uploads/product/'.$products->image)}}" height="200px" alt="Product image">
                        <div class="card-body">
                            <div class="clearfix mb-3">
                                <h6 class="text-center"><b>{{$products->brand_name}} {{$products->model_name}}</b></h6> 
                                <p style="font-size: 12px;text-align:center">Product ID - {{$products->id}}</p>
                                
                                @if($products->offer==1)
                                   <span class="badge bg-danger"><h6 style="align-items: center">SPECIAL PRICE - Rs.{{$products->selling_price}}.00</h6></span>
                               @else
                                   <h6 class="text-center text-danger">Rs.{{$products->selling_price}}.00</h6>
                               @endif
                                <div class="text-center my-3"> <a href="{{url('category/'.$category_details->name.'/'.$products->model_name)}}" class="btn btn-warning">See More & Buy</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                @endif
                @endforeach
              </div>
            </div>
        </div>
    </div>

@endsection