<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics</title>
</head>
<body>
<header>    
    <a href="{{route('comics.index')}}">Homepage fumetti</a>
    <a href="{{route('comics.create')}}">Nuovo fumetto</a>
</header>

    <main>
        <div>

            @yield('content')
        </div>
    </main>

    <footer>
        footer
    </footer>

</body>
</html>