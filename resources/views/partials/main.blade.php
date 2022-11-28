<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
{{--    --}}{{--  Bootstrap Links  --}}
{{--    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">--}}
{{--    <script type="javascript" src="{{ asset('js/bootstrap.js') }}"></script>--}}
{{--    --}}{{--  Bootstrap Icons  --}}
    <title>Main Layout</title>
    <style>

    </style>
</head>
<body>
    @include('partials.header')
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
</body>
</html>
