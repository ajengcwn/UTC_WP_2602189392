<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <title>@yield('title')</title>
</head>

<body>
    @include('components.navbar')

    <div class="container-fluid">
        <div class="row justify-content-center p-2">
            @yield('content1')
        </div>

        <div class="row justify-content-center p-2">
            @yield('content2')
        </div>
    </div>

    @include('components.footer')

    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>