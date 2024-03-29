<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tony's Pizzeria Maryhill Menu</title>

    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css">--}}
    <link rel="stylesheet" href="/css/app.css">

</head>
<body id="app">

    @include('frontend.partials._navbar')

    {{--@include('frontend.partials._spash')--}}

    <div class="container">

        @yield('content')

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="/js/app.js"></script>

</body>
</html>