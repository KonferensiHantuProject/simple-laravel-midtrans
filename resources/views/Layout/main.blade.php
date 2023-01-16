<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Link untuk font-awesone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <title>{{ $title }}</title>
  </head>
  <body class="bg-dark text-white d-flex flex-column min-vh-100"">

      
    {{-- Navbar --}}
    @include('Layout/partials.navbar')

    <div class="container">
        {{-- Content --}} 
        @yield('container')
    </div>
    
    {{-- Navbar --}}
    @include('Layout/partials.footer')
  
    <!-- JS Bootstrap -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
    {{-- Jquery --}}
    <script src="{{ asset('JS/javascript.js') }}"></script>

    {{-- Content --}} 
    @yield('script')
  </body>
</html>