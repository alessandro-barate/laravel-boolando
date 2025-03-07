<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../css/app.css">
    <title>Boolando - @yield('home-title')</title>
</head>

<body>

    {{-- Including Header --}}
    @include('shared.header')
    {{-- END Including Header --}}

    <main>
        @yield('main')
    </main>

    {{-- Including Footer --}}
    @include('shared.footer')
    {{-- END Including Footer --}}

</body>

</html>
