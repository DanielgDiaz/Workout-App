<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Workout Revolution</title>
    <link rel="stylesheet" href="{{ asset ('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header class="shadow-lg">
        <div class="bg-blue py-1"></div>
        <nav class="bg-blue-800 py-2">
            <a href="{{ route('home') }}"> 
                <img src="{{ asset('images/logo-pesa.png') }}" class="h-8 mx-auto">
            </a>
        </nav>
    </header>
    <main class="py-10">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>

    <footer class="py-4 text-center">
        @auth
            <a href="{{ url('dashboard') }}" class="text-sm text-gray-700 underline">
                Dashboard
            </a>
        @else
            <a href="{{ url('login') }}" class="text-sm text-gray-700 underline">
                Login
            </a>
            <a href="{{ url('register') }}" class=" ml-4 text-sm text-gray-700 underline"> 
                Register
            </a>
        @endif
    </footer>
</body>
</html>