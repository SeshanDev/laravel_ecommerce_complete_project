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
                        
                    </h4>
                </div>
                <div class="card-body">
                  <table class="table table-bordered">
                  <thead>
                    <tr>
                       
                        <th>Order ID</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($orders as $item)
                    <tr>
                        
                        <td>{{$item->id}}</td>
                        <td>{{$item->status=='0'?'Pending':'Your order on the way.You can take your valuable order Soon.'}}</td>
                        <td><a href="{{url('/view-order/'.$item->id)}}" class="btn btn-danger">View Order Details</a>
                            <a href="{{url('invoice/'.$item->id)}}" class="btn btn-success float-end">Generate Invoice</a></td>
                    </tr>

                    @endforeach
                </tbody>
              </table>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection