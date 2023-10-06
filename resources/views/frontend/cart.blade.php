@extends('layouts.front')

@section('title')
   My Cart

@endsection

@section('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">
           <b> CART PAGE </b>
        </h6>
    </div>
</div>

<div class="container my-5">
    <div class="card shadow cartitems">
        @if($cartitems->count()>0)
        <div class="card-body">
            @php $total=0; @endphp
            @foreach($cartitems as $item)
            <div class="row product_data">
                <div class="col-md-2 my-auto">
                    <img src="{{asset('assets/uploads/product/'.$item->products->image)}}" height="50px" width="70px" alt="Image here">
                </div>
                <div class="col-md-3 my-auto">
                    <h6>{{$item->products->brand_name}} {{$item->products->model_name}}</h6>
                </div>
                <div class="col-md-2 my-auto">
                    <h6>Rs.{{$item->products->selling_price}}</h6>
                </div>
                <div class="col-md-3 my-auto">
                    <input type="hidden" class="prod_id" value="{{$item->product_id}}">
                    
                      <label for="Quantity">Quantity</label>
                      <div class="input-group text-center mb-3" style="width:130px;">
                         <button class="input-group-text changequantity decrement-btn">-</button>
                         <input type="text" name="quantity" class="form-control qty-input text-center" value="{{$item->product_quantity}}">
                         <button class="input-group-text changequantity increment-btn">+</button>
                
                       </div>
                   
                </div>
                <div class="col-md-2 my-auto">
                    <button class="btn btn-danger deletecartitem">Remove <i class="bi bi-trash"></i></button>
                </div>
            </div>
            @php $total+=$item->products->selling_price*$item->product_quantity; @endphp
            @endforeach
        </div>
        <div class="card-footer">
            <h6>Total Price = Rs.{{$total}}
            <a href="{{url('/checkout')}}" class="btn btn-outline-success float-end" style="text-decoration: none;">Proceed to Checkout</a>
            </h6>
        </div>
        @else
            <div class="card-body text-center">
                <h2>Your <i class="bi bi-cart-x-fill"></i> is empty <i class="bi bi-emoji-frown-fill"></i></h2><br/><br/><hr/>
                <a href="{{url('allcategories')}}" class="btn btn-outline-success float-end" style="text-decoration: none;">Go to Shopping</a>
            </div>
        @endif
    </div>
</div>


@endsection