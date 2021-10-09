<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Amber Heart Academy</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200 h-screen antialiased leading-none font-sans">
<div class="flex flex-col">
    @if(Route::has('login'))
        <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
            @auth
                <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
            @else
                <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="min-h-screen flex items-center justify-center">
        <div class="flex flex-col justify-around h-full">
            <div>
                <h1 class="mb-6 text-gray-600 text-center font-light tracking-wider text-4xl sm:mb-8 sm:text-6xl">

                    Amber Heart Academy
            
                </h1>
                <div>
                    <img class="w-full py-8" src="images/logoaha.png" alt="">

                </div>
            
                <ul class="flex flex-col space-y-2 sm:flex-row sm:flex-wrap sm:space-x-8 sm:space-y-0 ">

                     <li>
                        <a href="{{ url('/apply') }}" class="no-underline hover:underline text-xl font-normal text-teal-800 uppercase" >Apply</a>
                    </li> 
                    <li>
                        <a href="{{ url('/courses') }}" class="no-underline hover:underline text-xl font-normal text-teal-800 uppercase" >Courses</a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}" class="no-underline hover:underline text-xl font-normal text-teal-800 uppercase" >About Us</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>
