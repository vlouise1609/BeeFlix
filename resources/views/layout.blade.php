<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="<?php echo asset('css/index.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/app.css')?>">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUIyJ" crossorigin="anonymous"> --}}
</head>
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
<body style="margin: 0" style="padding: 0">
    <div class="container-1">
        @yield('container')
    </div>
    
</body>
</html>