@extends('layouts.admin')
@section('title')
   Category View

@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Category Page</h4>
            <hr/>
        </div>   
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $item)
                       <tr>
                           <td>{{$item->id}} </td>
                           <td>{{$item->name}}</td>
                           <td>{{$item->description}}</td>
                           <td>
                               <img src="{{ asset('assets/uploads/category/'.$item->image) }}" class="category-image" alt="Image is here">
                           </td>
                           <td>{{$item->status}}</td>
                           <td>
                               <a href="{{ url('edit-product'.$item->id)}}" class="btn btn-primary">Edit</a>
                               <a href="{{ url('delete-category'.$item->id)}}" class="btn btn-danger">Delete</button>
                           </td>
                       </tr>
                       @endforeach
                </tbody>
            </table>
        </div>       
    </div> 
       
@endsection