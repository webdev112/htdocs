<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('public/css/app.css') }}">
    <title>Website</title>
</head>
<body>

    @include('inc.navbar')
    
    @include('inc.sidebar')
    
    <div class="container">
    @yield('content')
    </div>

    <script src="{{ URL::asset('public/js/popper.js') }}"></script>
    <script src="{{ URL::asset('public/js/app.js') }}"></script>
</body>
</html>