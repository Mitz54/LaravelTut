<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{mix('/css/app.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('/css/app.css') }}"> --}}
        
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>{{-- url - name of get in route --}}
                        
                    @else
                        <a href="{{ route('login') }}">Login</a>{{-- route - fixed name -> --}}

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a> 
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>
