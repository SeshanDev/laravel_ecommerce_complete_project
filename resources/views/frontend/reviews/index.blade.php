@extends('layouts.front')

@section('title',"Write a Review")


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if($verified_purchase->count()>0)
                        <h5>You are writing a review for {{$product->brand_name}} {{$product->model_name}}</h5>
                        <form action="/add-review" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <textarea class="form-control" name="user_review" rows="5" placeholder="Write a Review"></textarea>
                            <button type="submit" class="btn btn-primary mt-3">Submit Review</button>
                        </form>
                    @else
                        <div class="alert alert-danger">
                            <h5>You can't write a review to this product</h5>
                            <p>
                                Because for only customer who purchased.
                            </p>
                            <a href="{{url('/')}}" class="btn btn-primary mt-3">Go to Home</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection