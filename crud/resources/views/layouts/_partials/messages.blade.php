{{-- Introducimos las acciones que nos van a mostrar los mensajes em este caso para mostrar en los formularios. --}}

{{-- Reviso en el controlador para ver que funciones y acciones necesitan mostrar un mensaje --}}

@if ($message = Session::get('success'))
<div style="padding: 15px; background-color: green; color: white; margin-bottom: 10px;">
    <p>{{ $message }}</p>
</div>
@endif

@if ($message = Session::get('danger'))
<div style="padding: 15px; background-color: red; color: white; margin-bottom: 10px;">
    <p>{{ $message }}</p>
</div>
@endif
