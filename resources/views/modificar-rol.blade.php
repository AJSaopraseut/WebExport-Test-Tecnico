<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style-general.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar rol</title>
</head>


<body>
    <header id="header">
        <img src="{{ asset('imagenes/logo-webexport.png') }}" id="logo" alt="logoHeader" class="logo">
        <nav id="nav">
            <button type="button" class="navegacion" onclick="window.location='{{ route('nav.verTodo') }}'">Ver
                todo</button>
            <button type="button" class="navegacion"
                onclick="window.location='{{ route('nav.administrar') }}'">Administrar</button>
            <button type="button" class="navegacion"
                onclick="window.location='{{ route('nav.crear') }}'">Crear</button>
        </nav>
    </header>


    <div class="contenedorCentral">
        <form action="{{ route('rolGuardarCambios') }}" method="POST" id="modificarRol" class="formModificar"
            name="modificarRol">
            @csrf
            <input type="hidden" name="id" value='{{ $rolTarget->id }}' required>

            <label for="rol"> Rol: </label><br>
            <input type="text" id="rol" name="rol" value="{{ $rolTarget->rol }}" required><br>

            <button type='submit' class="btn-verde">Guardar cambios</button>
        </form>
    
    </div>

    <footer id="footer">
        <p>
            Aplicacion CRUD usada como test tecnico para WebExport, Hecho por Agustin Saopraseut.
        </p>
    </footer>
</body>

</html>
