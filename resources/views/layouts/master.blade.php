<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ env('APP_NAME') }}</title>
</head>
<body>
    
    @include('layouts._navbar')

      <div class="container">
          @yield('content')
      </div>


      <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>