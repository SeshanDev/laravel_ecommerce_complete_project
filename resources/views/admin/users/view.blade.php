@extends('layouts.admin')
@section('title')
   User Details

@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color:#565353">
                @if($users->role_as==0)    
                <h2 style="color:black">User Details</h2>
                @else
                <h2 style="color:black">Admin Details</h2>
                @endif
                    <h4> <a href="{{url('users')}}" class="btn btn-primary float-end">Back</a>
                    </h4>
                    <hr/>
                    <div class="col-md-4 mt-3">
                            <img src="{{ asset('uploads/profile/' .$users->image) }}" class="rounded-circle mt-5" width="150px" height="150px">
                        </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label class="labels" style="color:black"><b>Role</b></label>
                            <div class="p-2 border" style="color:black">{{$users->role_as=='0'?'User':'Admin'}}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="labels" style="color:black"><b>First Name</b></label>
                            <div class="p-2 border" style="color:black">{{$users->name}}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label class="labels" style="color:black"><b>Last Name</b></label>
                            <div class="p-2 border" style="color:black">{{$users->lname}}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label class="labels" style="color:black"><b>Email</b></label>
                            <div class="p-2 border" style="color:black">{{$users->email}}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label class="labels" style="color:black"><b>Phone</b></label>
                            <div class="p-2 border" style="color:black">{{$users->phone}}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label class="labels" style="color:black"><b>Address</b></label>
                            <div class="p-2 border" style="color:black">{{$users->address}}</div>
                        </div>
                        
                        <div class="col-md-4 mt-3">
                            <label class="labels" style="color:black"><b>City</b></label>
                            <div class="p-2 border" style="color:black">{{$users->city}}</div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection