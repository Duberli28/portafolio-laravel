<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Campus Virtual SJS</title>

<!--/* -------------------------------------------------------------------------- */
/*                                VINCULOS CSS                                */
/* -------------------------------------------------------------------------- */-->

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

   <!-- CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
   integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
   crossorigin="anonymous">

   {{-- AdminLte --}}

   <link rel="stylesheet" href="{{ url('/') }}/css/plugins/adminlte.css">
   <link rel="stylesheet" href="{{ url('/') }}/css/estilos.css">

   {{-- OverlayScrollbars --}}
   <link rel="stylesheet" href="{{ url('/') }}/css/plugins/OverlayScrollbars.css">
   <link rel="stylesheet" href="{{ url('/') }}/css/plugins/superslides.css">
   <link rel="stylesheet" href="{{ url('/') }}/css/plugins/animate.css">

   <link rel="stylesheet" href="{{ url('/') }}/css/estilos.css">
<!--/* -------------------------------------------------------------------------- */
/*                                VINCULOS JS                                */
/* -------------------------------------------------------------------------- */-->
    
 
   <!-- Popper -->
   <script 
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" 
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" 
        crossorigin="anonymous">
   </script>

    {{-- Bootstrap --}}
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" 
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" 
        crossorigin="anonymous">
    </script>

   {{-- Font awesome --}}
   <script src="https://kit.fontawesome.com/7ca4bf3348.js" crossorigin="anonymous"></script>


    <!-- Jquery -->
    <script
       src="https://code.jquery.com/jquery-3.5.1.min.js"
       integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
       crossorigin="anonymous">
   </script>
   
   {{-- AdminLte --}}
   <script src="{{ url('/') }}/js/plugins/adminlte.js"></script>

   
   {{-- OverlayScrollbars --}}
   <script src="{{ url('/') }}/js/plugins/jquery.overlayScrollbars.js"></script>
   <script src="{{ url('/') }}/js/plugins/OverlayScrollbars.js"></script>


  

</head>

<body class="hold-transition sidebar-mini layout-fixed ">
@if (Route::has('login'))
@auth
    <div class="wrapper">
        @include('modulos/header')
        @include('modulos/menu')
        @yield('content')
        @include('modulos/footer')
    </div>
    
<script src="{{ url('/') }}/js/codigo.js"></script>
@else
@include('paginas/login/fondo')
@endauth
@endif

<script src="{{ url('/') }}/js/plugins/jquery.fittext.js"></script>
<script src="{{ url('/') }}/js/plugins/jquery.lettering.js"></script>
<script src="{{ url('/') }}/js/plugins/jquery.textillate.js"></script>
<script src="{{ url('/') }}/js/plugins/jquery.superslides.js"></script>
<script src="{{ url('/') }}/js/codigo.js"></script>

<script>

    $('.tlt').textillate({
        loop:true
    });

</script>
</body>


</html>