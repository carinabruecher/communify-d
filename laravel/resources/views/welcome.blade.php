<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

    </style>
</head>
<body>
<div>
    <div class="row">
        <div class="col-7" style="padding-top: 20%; padding-left: 10%; padding-right: 10%">
            <img src="/svg/communify-logo.jpg" style="height: 300px"/>
            <div>
                <h1>Communify</h1>
                <p>
                    Bei Communify vernetzt du dich mit anderen in verschiedenen Communitys und tauschst dich so zu
                    den unterschiedlichsten Themen aus! Es warten viele spannende und lustige Inhalte auf dich, es
                    lohnt sich dabei zu sein!
                </p>
            </div>
        </div>

        <div class="col-5" style="background-color: #BE3D8F; padding-top: 30%; padding-bottom: 40%">
            <div class="mx-auto" style="width: 65%">
                <h1 class="text-white text-center">Mach mit und finde <br> deine Community!</h1>
                @if (Route::has('login'))
                    <div>
                        @auth
                            <div class="btn btn-light">
                                <a href="{{ url('/home') }}">Home</a>
                            </div>
                        @else
                            <div class="pt-3">
                                <a class="btn btn-light w-100" href="{{ route('login') }}">Login</a>
                            </div>

                            @if (Route::has('register'))
                                <div class="pt-2">
                                    <a class="btn btn-light w-100" href="{{ route('register') }}">Register</a>
                                </div>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>

    </div>
</div>
</body>
</html>
