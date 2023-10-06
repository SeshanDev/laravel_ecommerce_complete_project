@extends('layouts.front')

@section('title')
   REGISTER

@endsection

@section('content')
<section class="img js-fullheight" style="background-image: url('assets/uploads/images/fullbg.jpg')">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
      <img src="{{asset('assets/uploads/images/bg.jpg')}}" class="img-fluid" alt="bg image" style="height: 18cm">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <div class="row mb-3"><h1 style="color:linen">REGISTER</h1></div><p></p>
      <form method="POST" action="{{ route('register') }}">
        @csrf

          <!-- name input -->
          <div class="row mb-3">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name" />
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
          </div>
          

          <!-- e mail input -->
          <div class="row mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail Address" />
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
          </div>

          <!-- password input -->
          <div class="row mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" />
            @error('password')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
            @enderror
            
          </div>

          <!-- Confirm Password input -->
          <div class="row mb-3">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"/>
            
            
          </div>

          

          <!-- register button -->
          <p align="right">
          <button type="submit" class="form-control btn btn-danger submit px-3" >Register</button>
          @if (Route::has('password.request'))
                                    
          @endif
          </p>
          
          <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}" style="color:linen; text-decoration: none;"><h5> Already have account?</h5></a>
            
        </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection