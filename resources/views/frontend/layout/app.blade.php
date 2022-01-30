<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title', 'Trinity London College Türkiye Yetkili Sınav Merkezi')</title>
    @include('frontend.layout.css')

</head>
<body>
<div class="wrapper">
    @include('frontend.layout.loader')

    @yield('header')

    @yield('content')
    @include('frontend.layout.footer')
</div>
    @include('frontend.layout.js')
</body>
</html>
