<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AP DIGITAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>

    </style>

<link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>

<body class="antialiased">
    <div class="">
        @if (Route::has('login'))
        <div class="">
            @auth
            <a href="{{ url('/home') }}" class="">Home</a>
            @else
            <a href="{{ route('login') }}" class="">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="">
            <div class="flex justify-center">
                <img src="{{asset('images/logo.png')}}" width="100" />
            </div>









            <div class="">
                <div class="">
                    <div>
                        <p class="">Learn to set up entire IT solutions for your business.</p>

                        <p class="">No-cost training that empowers you to design, develop, and implement end to end IT business solutions. </p>
                        <p class="">Our goal is to help you step your game up without breaking the bank.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>