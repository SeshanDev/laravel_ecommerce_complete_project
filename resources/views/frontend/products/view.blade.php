@extends('layouts.front')

@section('title',$products->model_name)


@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="{{ url('/add-rating')}}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{$products->id}}">
        <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Rate {{$products->brand_name}} {{$products->model_name}}</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="rating-css">
            <div class="star-icon">
                @if($user_rating)
                    @for($i=1;$i<=$user_rating->stars_rated;$i++)
                        <input type="radio" value="{{$i}}" name="product_rating" checked id="rating{{$i}}">
                        <label for="rating{{$i}}" class="bi bi-star-fill"></label>
                    @endfor
                    @for($j=$user_rating->stars_rated+1;$j<=5;$j++)
                        <input type="radio" value="{{$j}}" name="product_rating" id="rating{{$j}}">
                        <label for="rating{{$j}}" class="bi bi-star-fill"></label>
                    @endfor
                    
                @else
                    <input type="radio" value="1" name="product_rating" checked id="rating1">
                    <label for="rating1" class="bi bi-star-fill"></label>
                    <input type="radio" value="2" name="product_rating" id="rating2">
                    <label for="rating2" class="bi bi-star-fill"></label>
                    <input type="radio" value="3" name="product_rating" id="rating3">
                    <label for="rating3" class="bi bi-star-fill"></label>
                    <input type="radio" value="4" name="product_rating" id="rating4">
                    <label for="rating4" class="bi bi-star-fill"></label>
                    <input type="radio" value="5" name="product_rating" id="rating5">
                    <label for="rating5" class="bi bi-star-fill"></label>
                @endif
            </div>
        </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="py-3 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">{{$products->category->name}} / {{$products->brand_name}} Brand</h6>
    </div>
</div><br/>

<div class="container">
    <div class="card shadow product_data">
        <div class="card body">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img src="{{asset('assets/uploads/product/'.$products->image)}}" class="w-100" alt="">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-0">
                        {{$products->brand_name}}  {{$products->model_name}}
                        @if($products->trending=='1')
                           <label style="font-size:16px;" class="float-end badge bg-danger trending_tag">Trending</label>
                        @endif
                    </h2>
                    <hr/>
                    <label class="me-3">Original Price:<s>Rs{{$products->original_price}}.00</s></label>
                    @if($products->offer==1)
                        <label class="fw-bold"><span class="badge bg-danger"><h4>Selling Price:Rs{{$products->selling_price}}.00</h4></span></label>
                    @else
                        <label class="fw-bold"><h4>Selling Price:Rs{{$products->selling_price}}.00</h4></label>
                    @endif
                    @php $ratenum = number_format($rating_value) @endphp
                    <div class="rating">
                        @for($i=1;$i<=$ratenum;$i++)
                            <i class="bi bi-star-fill checked"></i>
                        @endfor
                        @for($j=$ratenum+1;$j<=5;$j++)
                            <i class="bi bi-star-fill"></i>
                        @endfor
                        <span><b>Ratings</b></span>
                    </div>
                    <p class="mt-3">
                        {{$products->description}}
                    </p>
                    <table>
                    @if($products->category_id=='1'||$products->category_id=='2')
                        <tr><td><i class="bi bi-memory"></i><b> Ram</b></td><td><b>-</b></td> <td><b>{{$products->ram}}</b></td></tr>
                        <tr><td><i class="bi bi-cpu-fill"></i><b> Processor</b></td><td><b> -</b> </td><td><b> {{$products->processor}}</b></td></tr>
                        <tr><td><i class="bi bi-sd-card-fill"></i><b> Storage</b></td><td><b>-</b></td> <td><b>{{$products->storage}}</b></td></tr>
                        <tr><td><i class="bi bi-gpu-card"></i><b> Graphic</b></td><td><b> -</b></td><td><b> {{$products->graphic}}</b></td></tr>
                        <tr><td><i class="bi bi-usb-mini-fill"></i><b> Ports</b></td><td><b> -</b></td><td> <b>{{$products->ports}}</b></td></tr>
                        @if($products->category_id=='1')
                            <tr><td><i class="bi bi-display-fill"></i><b> Display</b></td><td><b> -</b></td><td><b> {{$products->display}}</b></td></tr>
                            <tr><td><i class="bi bi-microsoft"></i><b> Operating System</b></td><td><b> -</b></td><td><b> {{$products->operating_system}}</b></td></tr>
                        @endif 
                        <tr><td><i class="bi bi-palette-fill"></i><b> Color</b></td><td><b> -</b></td><td> <b>{{$products->color}}</b></td></tr>
                        @if($products->category_id=='2')
                            <tr><td><i class="bi bi-display-fill"></i><b> Monitor</b></td><td><b> -</b></td><td><b> {{$products->display}}</b></td></tr>
                            <tr><td><i class="bi bi-cpu-fill"></i><b> ChipSet</b></td><td><b> -</b></td><td><b> {{$products->chipset}}</b></td></tr>
                            <tr><td><b>Memory Slots</b></td><td><b> -</b></td><td><b> {{$products->memory_slots}}</b></td></tr>
                        @endif 
                        
                    @endif
                    <tr><td><h5><label class="badge bg-info text-black">Special</label><h5></td><td> -</td><td><label style="font-size:16px;" class="badge bg-warning text-black"> {{$products->other_info}}</label></td></tr>
                    </table>
                    <hr/>
                    @if($products->quantity>0)
                        <label class="badge bg-success">In Stock</label>
                    @else
                        <label class="badge bg-danger">Out of Stock</label>
                    @endif
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <input type="hidden" value="{{$products->id}}" class="prod_id">
                            <label for="Quantity"><b>Available {{$products->quantity}} Pieces</b></label>
                            <div class="input-group text-center mb-3">
                                <button class="input-group-text decrement-btn">-</button>
                                <input type="text" name="quantity" class="form-control qty-input text-center" value="1">
                                <button class="input-group-text increment-btn">+</button>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <br/>
                            @if($products->quantity>0)
                                <button type="button" class="btn btn-primary me-3 addToCartBtn float-start">Add to Cart <i class="bi bi-cart"></i></button>
                            @else
                                <button type="button" class="btn btn-primary me-3 addToCartBtn float-start disabled">Add to Cart <i class="bi bi-cart"></i></button>   
                            @endif 
                            
                            <button type="button" class="btn btn-success me-3 addtowishlist float-start">Add to Wishlist <i class="bi bi-heart"></i></button>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-4">   
                <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                   Rate this product
                </button>  

                <a href="{{url('add-review/'.$products->model_name.'/userreview')}}" class="btn btn-outline-dark">
                    Write a Review
                </a> 
            </div>
            <div class="col-md-8">
                @foreach($reviews as $item)
                    <div class="user-review">
                        <label for="">{{$item->user?->name.' '.$item->user?->lname}}</label>
                        @if($item?->user_id==Auth::id())
                           <a href="{{url('edit-review/'.$products->model_name.'/userreview')}}">edit</a>
                        @endif
                        <br/>
                        @php
                           $rating=App\Models\Rating::where('product_id',$products?->id)->where('user_id',$item->user?->id)->first();
                        @endphp
                        @if($rating)
                            @php $user_rated=$rating->stars_rated @endphp
                            @for($i=1;$i<=$user_rated;$i++)
                                <i class="bi bi-star-fill checked"></i>
                            @endfor
                            @for($j=$user_rated+1;$j<=5;$j++)
                                <i class="bi bi-star-fill "></i>
                            @endfor
                        @endif
                        
                        <small>Review on {{$item?->created_at->format('d M Y')}}</small>
                        <p>
                           {{$item?->user_review}}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>

       
        
    </div>
    
</div>


@endsection

