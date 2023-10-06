@extends('layouts.front')

@section('title')
   LOGIN

@endsection

@section('content')

<section class="img js-fullheight" style="background-image: url('assets/uploads/images/fullbg.jpg')">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
      <img src="{{asset('assets/uploads/images/bg.jpg')}}" class="img-fluid" alt="bg image" style="height: 18cm">
      </div>  
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <div class="row mb-3 "><h1 style="color:linen">LOGIN</h1></div><p></p>
      <form method="POST" action="{{ route('login') }}">
         @csrf

          <!-- Email input -->
          <div class="row mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email address" autofocus />
            @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
            @enderror
            
          </div>
          

          <!-- Password input -->
          <div class="row mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" />
            @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
            @enderror
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="row mb-3">
            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="color:linen">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

            </div>
            <a href="{{ route('password.request') }}" style="color:linen; text-decoration: none;">Forgot Your Password?</a>
          </div>
          

          <!-- Submit button -->
          <button type="submit" class="form-control btn btn-success submit px-3">Log in</button>
          @if (Route::has('password.request'))
                                    
          @endif
          <div class="w-50 text-md-right">
          <p></p><a href="{{route("register")}} " style="color:linen; text-decoration: none;" ><h5>Click Here To Register</h5></a>
          </div>     
        </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection