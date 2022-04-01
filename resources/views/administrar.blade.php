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
    <title>Modificar</title>

    <script>
        var msg = '{{ Session::get('alert') }}';
        var exist = '{{ Session::has('alert') }}';
        if (exist) {
            alert(msg);
        }
    </script>
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
                        <th></th>
                        <th></th>
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
                            <td>
                                <button class="btn-verde"
                                    onclick="location.href='{{ route('usuarioEditar', $usuario->id) }}'">Editar</button>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('usuarioBorrar', $usuario->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <div class="form-group">
                                        <input type="submit" class="btn-confirmar" value="Eliminar">
                                    </div>
                                </form>
                            </td>
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
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $rol)
                        <tr>
                            <td>{{ $rol->id }}</td>
                            <td>{{ $rol->rol }}</td>
                            <td>
                                <button class="btn-verde"
                                    onclick="location.href='{{ route('rolEditar', $rol->id) }}'">Editar</button>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('rolBorrar', $rol->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="form-group">
                                        <input type="submit" class="btn-confirmar" value="Eliminar">
                                    </div>
                                </form>
                            </td>
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
