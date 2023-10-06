@extends('layouts.admin')
@section('title')
   Printer

@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Printers Details Page</h4>
            <form action="desktops" method="GET">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col">
                          
                            
                          <div class="col-md-3 mb-0">
                            
                            <select class="form-select" name="product_id" id="id">
                              <option value="all">Product_ID</option>
                             
                              @foreach($printer as $prid)
                               
                              @if($prid->category_id==3)
                              <option value="{{$prid->product_id}}">{{$prid->product_id}}</option>
                              @endif
                              @endforeach
                                
                              
                             </select><br/>
                            
                            <button class="btn btn-outline-dark" type="submit">Search</button>
                          </div>
                        </div>
                    </div></div>
                    
            </form>
            <hr/>
        </div>   
        <div class="card-body mb-0">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <td></td>
                        <th>Product_ID</th>
                        <th>Brand_Name</th>
                        <th>Model_Name</th>
                        <th>Image</th>
                        <th>Original_price</th>
                        <th>Selling_price</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $x=0; @endphp
                    @foreach($printer as $item)
                     @if($item->category_id==3)
                     @php $x++;@endphp
                       <tr>
                           <td>{{$x}}</td>
                           <td>{{$item->product_id}} </td>
                           <td>{{$item->brand_name}}</td>
                           <td>{{$item->model_name}}</td>
                           <td>
                               <img src="{{ asset('assets/uploads/product/'.$item->image) }}" class="product-image" alt="Image is here">
                           </td>
                           <td>{{$item->original_price}}</td>
                           <td>{{$item->selling_price}}</td>
                           <td>{{$item->quantity}}</td>
                           <td>{{$item->status}}</td>
                           <td>
                               <a href="{{ url('edit-prod/'.$item->id)}}" class="btn btn-primary">Edit</a>
                               <a href="{{ url('delete-product'.$item->id)}}" class="btn btn-danger">Delete</button>
                           </td>
                       </tr>
                       @endif
                    @endforeach
                </tbody>
            </table>
        </div>       
    </div> 
       
@endsection