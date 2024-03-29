<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}frontEnd/assets/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}frontEnd/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}frontEnd/assets/css/style.css">
</head>

<body class="" style="position:relative;">
    @include('frontEnd.include.header')
   
    @yield('content')

    @include('frontEnd.include.footer')

    <script src="{{asset('/')}}frontEnd/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>