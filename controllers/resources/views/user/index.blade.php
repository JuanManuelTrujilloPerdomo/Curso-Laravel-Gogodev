<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>

<body>
    <h1>Users List:</h1>

    {{--  Llamamos una directiva de blade que nos permite recorrer en este caso una estrctura de datos --}}
    @forelse($users as $user)
        <li>{{ $user->name }} -- {{ $user->age }} years old</li>
    @empty
        <p>The user list is empty</p>
    @endforelse

</body>

</html>
