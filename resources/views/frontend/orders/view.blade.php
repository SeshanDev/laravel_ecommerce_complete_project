@extends('layouts.front')

@section('title')
My Orders

@endsection

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <h4 class="text-black">Order View
                        <a href="{{url('/my-orders')}}" class="btn btn-danger text-black float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                  <div class="row">
                      <div class="col-md-6 order-details">
                        <label for="">First Name</label>
                        <div class="border p-2">{{$orders->fname}}</div>
                        <label for="">Last Name</label>
                        <div class="border p-2">{{$orders->lname}}</div>
                        <label for="">Email</label>
                        <div class="border p-2">{{$orders->email}}</div>
                        <label for="">Contact No</label>
                        <div class="border p-2">{{$orders->phone}}</div>
                        <label for="">Address</label>
                        <div class="border p-2">{{$orders->address}},{{$orders->city}}</div>
                      </div>
                      
                      <div class="col-md-6">
                      <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Color</th>
                            <th>Image</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($orders->orderitems as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->products->brand_name}} {{$item->products->model_name}}</td>
                                    <td>{{$item->quantity}}</td>
                                    <td>Rs.{{$item->price}}</td>
                                    <td>{{$orders->color}}</td>
                                    <td><img src="{{asset('assets/uploads/product/'.$item->products->image)}}" width="50px" alt="Image is here"></td>
                                </tr>

                            @endforeach
                        </tbody>
                      </table>
                      <h4 class="px-2">Grand Total : Rs.{{$orders->total_price}}</h4>
                      </div>
                  </div>
                  
              </div>
            </div>
        </div>
    </div>
</div>
@endsection