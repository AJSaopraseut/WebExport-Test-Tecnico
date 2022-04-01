<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/style-general.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver todo</title>
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
        <h1>
            <!-- lista de usuarios -->
            <table class="tablaUsuarios">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>DNI</th>
                        <th>Rol</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->id }}</td>
                            <td>{{ $usuario->nombre }}</td>
                            <td>{{ $usuario->apellido }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>{{ $usuario->dni }}</td>
                            <td>{{ $usuario->rol_id[0]->rol }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Lista de roles -->
            <table class="tablaRoles">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Rol</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $rol)
                        <tr>
                            <td>{{ $rol->id }}</td>
                            <td>{{ $rol->rol }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </h1>
    </div>

    <footer id="footer">
        <p>
            Aplicacion CRUD usada como test tecnico para WebExport, Hecho por Agustin Saopraseut.
        </p>
    </footer>
</body>

</html>
