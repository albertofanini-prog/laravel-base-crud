<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="{{ route('comics.index') }}">Comics Index</a>
                </li>
                <li>
                    <a href="{{ route('comics.create') }}">Add New Comic</a>
                </li>
            </ul>
        </nav>
    </header>
    @yield('content')
</body>
</html>