<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
</head>
<body>
    @include('layout.header')
    <hr>
    @section('content')
    @show
    <hr>
    @include('layout.footer')
</body>
</html>