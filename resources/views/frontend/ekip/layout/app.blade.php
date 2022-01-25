<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Trinity London College Türkiye Yetkili Sınav Merkezi')</title>
    @include('frontend.layout.css')

</head>
<body>

@include('frontend.layout.loader')
@include('frontend.layout.header')

@yield('content')


@include('frontend.layout.footer')
@include('frontend.layout.js')

</body>
</html>
