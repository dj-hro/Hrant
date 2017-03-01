<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>


                   
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
                 
            

       
    </body>
</html>



