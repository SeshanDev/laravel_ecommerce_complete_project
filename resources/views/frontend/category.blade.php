@extends('layouts.front')

@section('title')
    All Categories

@endsection

@section('content')

<div class="container mt-3">
  
    <h1 class="text-center">CATEGORIES</h1><hr/>

</div>
    <div class="py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
              @foreach($category_details as $categories)
              
                <div class="col-md-3">
                
                    <div class="card h-100 shadow p-3 mb-5 bg-white animate__animated animate__bounceInRight" style="animation-delay: 0s">
                        <img src="{{asset('assets/uploads/category/'.$categories->image)}}" alt="Category image" height="200px" >
                        <div class="card-body">
                        <div class="card-title"><h2><b>{{$categories->name}}</b></h2></div><br>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-danger mt-3" href="{{url('category/'.$categories->name)}}" style="text-decoration: none;">View Products</a>
                        </div>
                        </div>
                    </div>
                
                </div>
                @endforeach
              
            </div>
        </div>
    </div>
@endsection