<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Klass | Convenient e-Learning Platform for Schools</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-gray-100">
        <nav class="p-6 bg-white flex justify-between">
            <ul class="flex items-center">
                <li class="p-3">
                <a href="/">Home</a>
                </li>
                <li class="p-3">
                <a href="/dashboard">Dashboard</a>
                </li>
            </ul>
        </nav>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>