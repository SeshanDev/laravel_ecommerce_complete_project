@extends('layouts.front')

@section('title')
   RESET

@endsection

@section('content')
<section class="img js-fullheight" style="background-image: url('{{ asset('assets/uploads/images/fullbg.jpg')}}')">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
      <img src="{{asset('assets/uploads/images/bg.jpg')}}" class="img-fluid" alt="bg image" style="height: 18cm">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <div class="row mb-3"><h2 style="color:linen; font-weight: 900;">Reset Password</h2></div><p></p>
      <form method="POST" action="{{ route('password.update') }}">
         @csrf

         <input type="hidden" name="token" value="{{ $token }}">

          <!-- Email input -->
          <div class="row mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus  placeholder="Email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
          </div>
          

          <!-- new password input -->
          <div class="row mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="New Password" >
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

           <!-- confirm password input -->
           <div class="row mb-3">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
            
          </div>

          
          

          <!-- Submit button -->
          <button type="submit" class="btn btn-success btn-lg btn-block">Change Password</button>
          
          
          </div>     
        </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection