@extends('layouts.front')


@section('title')
    Checkout

@endsection

@section('content')

<div class="py-3 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">Checkout</h6>
    </div>
</div>
<div class="container mt-3">
    
    <form action="{{url('/place-order')}}" method="POST">
        {{csrf_field()}}
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body shadow-sm">
                    <h6>Basic Details</h6>
                    <hr/>
                    <div class="row checkout-form">
                        <div class="col-md-6">
                            <label for="">First Name</label>
                            <input type="text" class="form-control firstname" value="{{Auth::user()->name}}" name="fname" placeholder="Enter First Name" required>
                            <span id="fname_error" class="text-danger"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control lastname" value="{{Auth::user()->lname}}" name="lname" placeholder="Enter Last Name" required>
                            <span id="lname_error"  class="text-danger"></span>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Email</label>
                            <input type="text" class="form-control email" value="{{Auth::user()->email}}" name="email" placeholder="Enter Email" required>
                            <span id="email_error"  class="text-danger"></span>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Phone Number</label>
                            <input type="text" class="form-control phone" value="{{Auth::user()->phone}}" name="phone" placeholder="Enter Phone Number" required>
                            <span id="phone_error"  class="text-danger"></span>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Address</label>
                            <input type="text" class="form-control address" value="{{Auth::user()->address}}" name="address" placeholder="Enter Address 1" required>
                            <span id="address_error"  class="text-danger"></span>
                        </div>
                    
                        <div class="col-md-6 mt-3">
                            <label for="">City</label>
                            <input type="text" class="form-control city" value="{{Auth::user()->city}}" name="city" placeholder="Enter City" required>
                            <span id="city_error"  class="text-danger"></span>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div><br/>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body shadow-sm">
                    <h6>Order Details</h6>
                    <hr/>
                    <table class="table table-striped border">
                        <thead>
                        <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Color<br/>(Choose an available Color) </th>
                        </tr>
                        </thead>
                        @php $total=0 @endphp
                        <tbody>
                            @foreach($cartitems as $item)
                            
                            <tr>
                                <td>{{$item->products->brand_name}} {{$item->products->model_name}}</td>
                                <td>{{$item->product_quantity}}</td>
                                <td>Rs.{{$item->products->selling_price}}</td>
                                <td><select class="form-select" name="color">
                        
                        
                                    <option value="">Choose a Color</option>
                                    <option value="Blue">Blue</option>
                                    <option value="Black">Black</option>
                                    <option value="Gray">Gray</option>
                                    <option value="Gold">Gold</option>
                                    <option value="White">White</option>
                                 
                               
                           </select></td>
                            </tr>
                            
                            
                            @php 
                            
                            $total+=$item->products->selling_price*$item->product_quantity; @endphp
                            @endforeach
                        </tbody>
                    </table>
                    <h5><b>Grand Total  : Rs.{{$total}}.00</b></h5>
                    <hr/>
                    <input type="hidden" name="payment_mode" value="Cash On Delivery">
                    <button type="submit" class="btn btn-success float-end w-100">Place Order for Cash on Delivery</button><br><br/>
                    <button type="button" class="btn btn-danger pay_btn w-100">Online Pay</button><br><br/>
                    
                </div>
            </div>
        </div>
    </div>
    </form>
    
</div>

@endsection

@section('scripts')
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    
@endsection

