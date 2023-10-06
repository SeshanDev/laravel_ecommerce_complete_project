
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="#" target="_blank">
      
      <span class="ms-5 font-weight-bold text-white"><h3 class="text-center text-white">Tec Com</h3></span>
    </a>
  </div>
  <div>
  <ul class="navbar-nav">
  <li class="nav-item" >
        <a class="nav-link {{Request::is('my-profile') ? 'active bg-gradient-primary':''}} text-white " href="{{url('/my-profile')}}" target="_blank">
        <table>
          <tr>
            <td><img src="{{ asset('uploads/profile/' .Auth::user()->image) }}" class="rounded-circle mt-5" width="35px" height="35px"> </td>
            <td><span style="padding-left:10px; padding-top: 50px; display:inline-block;">{{ Auth::user()->name }}</span></td>
          </tr>
        </table>
        </a>
  </li>
  </ul>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{Request::is('dashboard') ? 'active bg-gradient-primary':''}} text-white" href="{{url('dashboard')}}">
          
          <span class="nav-link-text ms-1"></i>Home</span>
        </a><hr>
      </li>

      {{-- <li class="nav-item">
        <a class="nav-link {{Request::is('charts') ? 'active bg-gradient-primary':''}} text-white" href="{{url('charts')}}">
          
          <span class="nav-link-text ms-1"></i>Charts</span>
        </a><hr>
      </li> --}}
      
      <li class="nav-item">
        <a class="nav-link {{Request::is('categories') ? 'active bg-gradient-primary':''}} text-white " href="{{url ('categories')}}">
          
          <span class="nav-link-text ms-1">Categories</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{Request::is('add-category') ? 'active bg-gradient-primary':''}} text-white " href="{{url ('add-category')}}">
          
          <span class="nav-link-text ms-1">Add Category</span>
        </a><hr/>
      </li>
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Products</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white  {{Request::is('laptops') ? 'active bg-gradient-primary':''}} text-white" href="{{url ('laptops')}}">
          
          <span class="nav-link-text ms-1">Laptops</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white  {{Request::is('desktops') ? 'active bg-gradient-primary':''}} text-white" href="{{url ('desktops')}}">
          
          <span class="nav-link-text ms-1">Desktops</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{Request::is('printers') ? 'active bg-gradient-primary':''}} text-white" href="{{url ('printers')}}">
          
          <span class="nav-link-text ms-1">Printers</span>
        </a>
      </li>
      
      
      <li class="nav-item">
      <a class="nav-link text-white {{Request::is('phones') ? 'active bg-gradient-primary':''}} text-white" href="{{url ('phones')}}">
          
          <span class="nav-link-text ms-1">Mobile Phones</span>
        </a>
      </li>

      <li class="nav-item">
          <a class="nav-link text-white {{Request::is('special') ? 'active bg-gradient-primary':''}} text-white" href="{{url ('special')}}">
            
            <span class="nav-link-text ms-1">Special offers</span>
          </a>
        </li><hr/>

      <li class="nav-item">
        <a class="nav-link {{Request::is('add-product') ? 'active bg-gradient-primary':''}} text-white " href="{{url ('add-product')}}">
          
          <span class="nav-link-text ms-1">Add Products</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white  {{Request::is('orders') ? 'active bg-gradient-primary':''}} text-white" href="{{url ('orders')}}">
          
          <span class="nav-link-text ms-1">Orders</span>
          
        </a><hr/>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white  text-white  {{Request::is('users') ? 'active bg-gradient-primary':''}} text-white" href="{{url ('users')}}">
          
          <span class="nav-link-text ms-1">Users</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white  text-white  {{Request::is('admins') ? 'active bg-gradient-primary':''}} text-white" href="{{url ('admins')}}">
          
          <span class="nav-link-text ms-1">Admins</span>
        </a><hr>
      </li>

      
    </ul>
  </div>
  <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    
    <div class="mx-3">
      <a class="btn bg-gradient-primary mt-4 w-100" href="/" type="button">Go to Front Side</a>
    </div>
  </div>
  
</aside>



