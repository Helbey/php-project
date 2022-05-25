<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!--[if IE]><![endif]-->
        <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased ">
        <div class="relative flex items-top justify-between  bg-gray-50 dark:bg-gray-900 sm:items-center py-2 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 pt-6 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-600  dark:text-gray-500 ">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-lg  mr-10 text-gray-600  dark:text-gray-500 ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-lg  mr-10 text-gray-600  dark:text-gray-500 ">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
<img src="{{ asset('./pic/favicon.png')}}" class="w-20 float-left pl-8 pt-2">

        </div>
          


        </div>
        
        <section>
             <img src="{{ asset('./pic/kevin-bhagat-zNRITe8NPqY-unsplash.jpg')}}" class="">
             
        </section>
        
    </body>
</html>
