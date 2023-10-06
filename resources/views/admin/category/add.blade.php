@extends('layouts.admin')
@section('title')
    Add Category

@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Category</h4>
        </div>
        <div class="card-body">
            <form action="{{url ('insert-category')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="form-control"></textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">status(Active/Not Active)</label>
                    <input type="checkbox" name="status">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">popular</label>
                    <input type="checkbox" name="popular">
                </div>

                <div class="col-md-12">
                    <input type="file" name="image" class="form-control">
                </div><br/><br/>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
        </div>
    </div>    
@endsection