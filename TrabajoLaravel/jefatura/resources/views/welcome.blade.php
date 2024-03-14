<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .logo {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 150px;
            height: auto;
        }

        .title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .links {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .links a {
            padding: 10px 20px;
            text-decoration: none;
            color: #ffffff;
            background-color: #4a90e2;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .links a:hover {
            background-color: #357bd8;
        }

        .welcome {
            text-align: center;
            margin-top: 20px;
        }

        .welcome h1 {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel Logo">
        </div>
        <div class="title">Welcome to Laravel</div>
        <div class="links">
            @if(Auth::check())
            
                @if(Auth::user()->rol_id == 2)
                <h1>Eres admin de Jefatura</h1>
                    <a href="{{ url('/alumnos') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Alumnos</a>
                @elseif(Auth::user()->rol_id == 3)
                    <h1>Eres usuario normal</h1>
                @else
                    {{-- Otro contenido para otros roles o para usuarios no autenticados --}}
                @endif
            @endif
            @auth
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
        <div class="welcome">
            <h1>Welcome</h1>
        </div>
    </div>
</body>
</html>
