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
    <title>Modificar usuario</title>
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
        
        <form action="{{ route('usuarioGuardarCambios') }}" method="POST" id="formUsuario" class="formModificar"
            name="modificarUsuario">
            @csrf
            <input type="hidden" name="id" value='{{ $usuarioTarget->id }}' required>

            <label for="nombre"> Nombre: </label><br>
            <input type="text" id="nombre" name="nombre" value="{{ $usuarioTarget->nombre }}" required><br>

            <label for="apellido"> Apellido: </label><br>
            <input type="text" id="apellido" name="apellido" value="{{ $usuarioTarget->apellido }}" required><br>

            <label for="email"> Email: </label><br>
            <input type="email" id="email" name="email" value="{{ $usuarioTarget->email }}" required><br>

            <label for="dni"> DNI: </label><br>
            <input type="dni" id="dni" name="dni" value="{{ $usuarioTarget->dni }}" required><br>

            <label for="rol"> Rol: </label><br>
            <select form="formUsuario" id="rol" name="rol_id" value="{{ $usuarioTarget->rol_id }}" required>
                @foreach ($roles as $rol)
                    <option value="{{ $rol->id }}">{{ $rol->rol }}</option>
                @endforeach
            </select>
            <br>
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
