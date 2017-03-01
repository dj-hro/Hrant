<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Project</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lightbox.css') }}">




    <script type="text/javascript" src="{{ asset('js/jq.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('js/javas.js') }}" ></script>

    

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body class="my_bodi_for_my_project">

             
        @if (Auth::guest())
            <div class="div_login_register">
                <div class="div_login">
                    <form method="get" action="{{ route('login') }}">
                        <button class="standart_knopka" id="login_knopka">Login</button>
                    </form>
                </div>
                <div class="div_register">
                    <form method="get" action="{{ route('register') }}">
                        <button class="standart_knopka" id="register_knopka">Register</button>
                    </form>
                </div>    
            </div>            
        @else                            
       <!--      <button class="standart_knopka" id="logout_knopka"><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        Logout
                            </a></button>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
                     -->        
        @endif


        @yield('content')
  

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>

</body>
</html>
