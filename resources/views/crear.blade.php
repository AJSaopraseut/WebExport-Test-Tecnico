<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style-general.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear</title>
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
        
            <div id="formTitulo">Elegir que desea elemento desea crear:</div>

            <form id="selectorParaCrear" name="selectorParaCrear" class="selectorParaCrear">
                <!-- form selector -->
                <input type="radio" id="usuarioSelect" name="selector" value="1">
                <label for="selector" class="select">Nuevo Usuario</label><br>
                <input type="radio" id="rolSelect" name="selector" value="2">
                <label for="selector" id="rolSelectLabel" class="select" >Nuevo Rol</label><br>
            </form>

            <!-- form para crear usuario -->
            <form action={{ route('usuarioCrear') }} method="POST" id="formUsuario" class="formCrear"
                name="crearUsuario">
                @csrf
                <label for="nombre"> Nombre: </label><br>
                <input type="text" id="nombre" name="nombre" required><br>

                <label for="apellido"> Apellido: </label><br>
                <input type="text" id="apellido" name="apellido" required><br>

                <label for="email"> Email: </label><br>
                <input type="email" id="email" name="email" required><br>

                <label for="dni"> DNI: </label><br>
                <input type="dni" id="dni" name="dni" required><br>

                <label for="rol"> Rol: </label><br>
                <select form="formUsuario" id="rol" name="rol_id" required>
                    @foreach ($roles as $rol)
                        <option value="{{ $rol->id }}">{{ $rol->rol }}</option>
                    @endforeach
                </select>
                <button type='submit' class="btn-verde">Crear Usuario</button>
            </form>
            <!-- form para crear rol -->
            <form action={{ route('rolCrear') }} method="POST" id="crearRol" class="formCrear" name="crearRol">
                @csrf
                <label for="rol"> Nombre Del Rol: </label><br>
                <input type="text" id="rol" name="rol" required><br>
                <button type='submit' class="btn-verde">Crear Rol</button>
            </form>
        
    </div>
    <footer id="footer">
        <p>
            Aplicacion CRUD usada como test tecnico para WebExport, Hecho por Agustin Saopraseut.
        </p>
    </footer>
</body>

</html>
