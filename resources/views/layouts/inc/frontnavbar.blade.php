<nav class="navbar navbar-expand-lg navbar-light" style="background-color:red">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}" style="text-decoration: none;">Tec Com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{url('/')}}" style="text-decoration: none;"><b>Home</b></a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="{{url('allcategories')}}" style="text-decoration: none;"><b>Categories</b></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('offer')}}" style="text-decoration: none;"><b>Special Offers</b></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('cart')}}" style="text-decoration: none;"><i class="bi bi-cart-fill"></i> <b>Cart</b>
            <span class="badge badge-pill cart-count" style="background-color: coral">0</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{url('/wishlist')}}" style="text-decoration: none;"><i class="bi bi-heart-fill"></i> <b>Wishlist</b>
            <span class="badge badge-pill wishlist-count" style="background-color: crimson">0</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{url('aboutus')}}" style="text-decoration: none;"> <b>About Us</b>
            
          </a>
        </li>
      </ul>
    
      <div>
        <form action="{{url('searchproduct')}}" method="POST">
          @csrf
          <div class="input-group">
            <input class="form-control" style="width: 15cm" id="search-product" name="product_name" required type="search" placeholder="Search Products Model Name" aria-label="Search">
            <button class="btn btn-outline-dark" type="submit" style="text-decoration: none;">Search</button>
          </div>
        </form>
        </form>
      </div>
      <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item" >
                                    <a class="nav-link" href="{{ route('login') }}" style="text-decoration: none;">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="text-decoration: none;">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none;">
                              <img src="{{ asset('uploads/profile/' .Auth::user()->image) }}" class="rounded-circle" width="35px" height="35px"><span style="padding-left:10px">{{ Auth::user()->name }}</span>
                            </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: darkgoldenrod">
                            <li><a class="dropdown-item" href="{{url('/my-orders')}}" style="text-decoration: none;">My Orders</a></li>
                            <li><a class="dropdown-item" href="{{url('/my-profile')}}" style="text-decoration: none;">My Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="text-decoration: none;">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                </form>
                                </li>
                           
                        </ul>
                        </li>
                            
                        @endguest
        </ul>
    
    </div>
  </div>
</nav>