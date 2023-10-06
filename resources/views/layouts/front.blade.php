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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/about.css') }}" rel="stylesheet">
    

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <!-- Fonts awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" integrity="sha384-EvBWSlnoFgZlXJvpzS+MAUEjvN7+gcCwH+qh7GRFOGgZO0PuwOFro7qPOJnLfe7l" crossorigin="anonymous">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    
  
  </head>
  
<body class="g-sidenav-show  bg-gray-200">
  
  <div class="loader" style="position: fixed;width:100%;height:100%;padding-top:350px;margin:0 auto;
  padding-left:850px;z-index:99999;background:rgb(141, 14, 14)" >
  <h2 style="padding-left: 10px;color:white">Loading..</h2>
    <img src="{{asset('assets/uploads/images/bars.svg')}}"/>
  </div> 

@include('layouts.inc.name')

@include('layouts.inc.frontnavbar')

  
      @yield('content')
    
  </div>
   
@include('layouts.inc.frontfooter')

  <div class="whatsapp-chat">
    <a href="https://wa.me/+94784700850?text=Hello!" target="_blank">
      <img src="{{asset('assets/uploads/images/whatsapp.png')}}" alt="Whatsapp image is here" width="80px" height="80px">
    </a>
  </div>
  
  
  <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/js/custom.js') }}"></script>
  <script src="{{ asset('frontend/js/checkout.js') }}"></script>
  <script src="{{ asset('frontend/js/checkout-stripe.js') }}"></script>
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
  <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  
  
  
  <!--Start of Tawk.to Script-->
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/6339c6b937898912e96c78dc/1gecr0hpa';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
</script>
  <!--End of Tawk.to Script-->
  <!--End of Tawk.to Script-->

<script>
  $(function(){
    setTimeout(()=>{
      $(".loader").fadeOut(300)
    },500)
  })
</script>

  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
   
      var availableTags = [];
      $.ajax({
        type: "GET",
        url: "/product-list",
        success: function (response) {
            //console.log(response);
            startAutoComplete(response);
        }
      });
      
      function startAutoComplete(availableTags){
        $( "#search-product" ).autocomplete({
          source: availableTags
        });
      }
    </script>
  
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
