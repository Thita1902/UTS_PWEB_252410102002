<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | Gabin Ice</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    @if (!request()->routeIs('login'))
        <x-navbar :username="$username ?? ''" />
    @endif

    <main>
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>