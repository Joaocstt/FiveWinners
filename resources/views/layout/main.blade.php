<!doctype html>
<html lang="pt-br" class="semi-dark">

<head>
    @include('layout.assets')
</head>

<body>

<div class="wrapper">

    @include('layout.sidebar')

    @include('layout.header')

    @yield('content')

    @include('layout.footer')

    @include('layout.themeCustomizer')

</div>

@include('layout.scripts')
</body>

</html>
