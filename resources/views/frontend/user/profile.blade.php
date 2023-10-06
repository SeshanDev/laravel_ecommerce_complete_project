@extends('layouts.front')

@section('title')
   My profile

@endsection

@section('content')

<section class="vh-80" style="background-color:linen">
<div  class="container py-6 h-100">
          
<form method="POST" action="{{ url('my-profile-update') }}" enctype="multipart/form-data">
        {{ @csrf_field() }}
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row" >
        <div class="col-md-3 border-right" style="background-color:red ">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img src="{{ asset('uploads/profile/' .Auth::user()->image) }}" class="rounded-circle mt-5" width="150px" height="150px"> 
            </div>
        </div>
        <div class="col-md-9 border-right" style="background-color:#E5E0DE ">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-5">
                        <label class="labels"><b>Name</b></label>
                        <input type="text" class="form-control" name="name" placeholder="first name" value="{{ Auth::user()->name}}">
                    </div>
                    <div class="col-md-5">
                        <label class="labels"></label>
                        <input type="text" class="form-control" name="lname" placeholder="last name"  value="{{ Auth::user()->lname}}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-10">
                        <label class="labels"><b>Email</b></label>
                        <input type="text" class="form-control" name="email" placeholder="enter your email" readonly value="{{ Auth::user()->email}}" >
                    </div>
                    <div class="col-md-10">
                        <label class="labels"><b>Mobile Number</b></label>
                        <input type="text" class="form-control" name="phone" placeholder="enter your phone number" value="{{ Auth::user()->phone}}" >
                    </div>
                    <div class="col-md-10">
                        <label class="labels"><b>Address</b></label>
                        <input type="text" class="form-control" name="address" placeholder="enter address"  value="{{ Auth::user()->address}}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-5">
                        <label class="labels"><b>City</b></label>
                        <input type="text" class="form-control" name="city" placeholder="enter city"  value="{{ Auth::user()->city}}">
                        
                    </div>
                <div class="row mt-3">
                    <div class="col-md-5">
                        <label class="labels"><b>Select Profile Picture</b></label>
                        <input type="file" class="form-control" name="image"  value="{{ Auth::user()->image}}">
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <button type="submit" class="btn btn-danger btn-lg btn-block">Update Profile</button>

                </div>
            </div>
    </div>
</div>
</div>
</div>
</form>
</div>
</section>

@endsection