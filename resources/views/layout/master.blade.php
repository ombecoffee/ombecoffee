<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Styles -->
    <link href="{{ asset('css/page.css') }}" rel="stylesheet" type="text/css">
    @yield('content_head')
</head>

<body>
    @include('layout._nav')
  
    <main class="main-content bg-gray ">
    @yield('content')

</main>
    @include('layout._footer')
   
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/page.js') }}"></script>
    @yield('content_footer')
   
</body>

</html>