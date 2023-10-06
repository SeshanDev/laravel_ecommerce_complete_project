@extends('layouts.admin')
@section('title')
    Order History
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <form action="order-history" method="GET">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col">
                          
                            
                          <div class="col-md-3 mb-0">
                            <h6>Orders Filtering</h6>
                            <select class="form-select" name="id" id="brand">
                              <option value="all">Product_ID</option>
                              
                              @foreach($orders as $order)
                              @if($order->status==1)
                              <option value="{{$order->id}}">{{$order->id}}</option>
                              @endif
                              @endforeach
                                
                              
                            </select><br/>
                            <button class="btn btn-outline-dark" type="submit">Search</button>
                          </div>
                        </div>
                    </div></div>
                    
            </form>

                <div class="card-header bg-primary">
                    <h4 class="text-white">Order History
                        <a href="{{'orders'}}" class="btn btn-warning float-end">New Orders</a>
                    </h4>
                    
                </div>
                <div class="card-body">
                  <table class="table table-bordered">
                  <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Order Date</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($orders as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{date('d-m-Y',strtotime($item->created_at))}}</td>
                        <td>{{$item->total_price}}</td>
                        <td>{{$item->status=='0'?'pending':'completed'}}</td>
                        <td><a href="{{url('admin/view-order/'.$item->id)}}" class="btn btn-primary">View</a></td>
                    </tr>

                    @endforeach
                </tbody>
              </table>
              </div>
            </div>
    </div>
</div>

@endsection