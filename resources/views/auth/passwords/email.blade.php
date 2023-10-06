@extends('layouts.front')

@section('title')
   EMAIL

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
      <div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
               {{ session('status') }}
             </div>
        @endif
    </div> 
      <form method="POST" action="{{ route('password.email') }}">
        @csrf
          <!-- Email input -->
          <div class="row mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail Address" />
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
          </div>
        
          <!-- Submit button -->
          <button type="submit" class="btn btn-danger btn-lg btn-block">Send Password Reset link</button>
             
        </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection