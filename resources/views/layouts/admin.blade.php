<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
      @yield('title')
  </title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="admin/css/nucleo-icons.css" rel="stylesheet" />
    <link href="admin/css/nucleo-svg.css" rel="stylesheet" />
    <link id="pagestyle" href="admin/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
    <!-- Styles -->
    <link href="{{ asset('admin/css/material-dashboard.css.map') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/material-dashboard.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/custome.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" integrity="sha384-EvBWSlnoFgZlXJvpzS+MAUEjvN7+gcCwH+qh7GRFOGgZO0PuwOFro7qPOJnLfe7l" crossorigin="anonymous">
    
</head>
<body class="g-sidenav-show  bg-gray-200">

<div class="wrapper">
@include('layouts.inc.sidebar')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  @include('layouts.inc.adminnavbar')
  <div class="content"> @yield('content')</div>
  @include('layouts.inc.adminfooter')
</main>

</div>


  
  <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
  <script src="{{ asset('admin/js/chartjs.min.js') }}" defer></script>
  <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}" defer></script>
  <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
  <script src="{{ asset('admin/js/bootstrap-notify.js?v=3.0.0')}}" defer></script>
  <script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}" defer></script>
  <script src="{{ asset('admin/js/plugins/smooth-scrollbar.min.js') }}" defer></script>
  <script src="{{ asset('admin/js/material-dashboard.min.js?v=3.0.0')}}" defer></script>
  <script src="{{ asset('admin/js/material-dashboard.js?v=3.0.0')}}" defer></script>
  <script src="{{ asset('admin/js/material-dashboard.js.map?v=3.0.0')}}" defer></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.esm.min.js" integrity="sha512-wp1TmWHEmHgERMuWw8Q0tCwFbZab0o6MjMS/HceqShRObCHzIfTrZfjpMm1bTuqIVrQXd9SRhYt0V9hObySU/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  @if(session('status'))
  <script>
  //  swal("{{session('status')}}")
   swal({
   title: "{{session('status')}}",
   icon: "success",
   button: "OK",
   });
 </script>
@endif
@if(session('warn'))
<script>
  swal({
  title: "{{session('warn')}}",
  icon: "warning",
  button: "OK",
  dangerMode: true,
 })
</script>

  @endif
  @yield('scripts')
  

    
</body>
</html>
