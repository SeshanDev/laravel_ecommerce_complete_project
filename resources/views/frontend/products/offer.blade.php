@extends('layouts.front')


<link rel="stylesheet" href="{{ asset('frontend/css/card.css') }}">
@section('title')
special prices

@endsection

@section('content')

<div class="py-5">

<div class="container">
    <h1 class="text-center"><b>SPECIAL PRICES</b></h1><hr/>
    <div class="row row-cols-1 row-cols-md-2 g-4">
      @foreach($products as $prod)
      
      
        <div class="col-md-3 mb-0 animate__animated animate__slideInDown">
          <div class="card h-70 container-fluid bg-trasparent my-4 p-3 shadow-sm" style="">
            <div class="card-header">
                @if($prod->quantity>0)
                   <div class="badge bg-success col-12">In Stock</div>
                @else
                   <span class="badge bg-danger col-12">Out of Stock</span>
                @endif
              </div>
            <img src="{{asset('assets/uploads/product/'.$prod->image)}}" height="200px" alt="Product image">
            <div class="card-body">
                <div class="clearfix mb-3">
                    <h6 class="text-center"><b>{{$prod->brand_name}} {{$prod->model_name}}</b></h6> 
                    <p style="font-size: 12px;text-align:center">Product ID - {{$prod->id}}</p>
                    <span class="badge bg-danger"><h6 style="align-items: center">SPECIAL PRICE - Rs.{{$prod->selling_price}}.00</h6></span>
                    <div class="text-center my-3"> <a href="{{url('category/'.$category->name.'/'.$prod->model_name)}}" class="btn btn-warning" style="text-decoration: none;">See More & Buy</a> </div>
                </div>
            </div>
        </div>
        </div>
        
        
        @endforeach
    </div> 
    </div>
</div>
@endsection