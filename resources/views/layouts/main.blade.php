<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Taren | {{ $title }}</title>
</head>

<body>
    {{-- navbar section --}}
    @include('partials.nav')

    {{-- home section --}}
    <section class="p-8">
        @yield('container')
    </section>
</body>

</html>
