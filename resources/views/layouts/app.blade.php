<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('page-title', 'Lazy Cooking')</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <!-- normalize -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    @stack('add-css')
</head>

<body>
    <!-- nav  -->
    @include('layouts.partials.navbar')
    <!-- end of nav -->
    <!-- main -->
    <main class="page">
        @yield('contents')
    </main>
    <!-- end of main -->
    @stack('add-contents')
    <!-- footer -->
    @include('layouts.partials.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('add-js')
</body>

</html>
