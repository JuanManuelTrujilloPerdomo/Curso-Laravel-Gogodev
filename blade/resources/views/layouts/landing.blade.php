<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{--  Directiva de blade con (@) para extender el contenido del html--}}
    <title>
        @yield('title') {{--Zonas definidas para poder inyectar contenido HTML --}}
    </title>
</head>
<body>
    @include('layouts._partials.menu') {{--Directiva para incluir el menú en la landing --}}
    @yield('content') {{--Zonas definidas para poder inyectar contenido HTML --}}
</body>
</html>