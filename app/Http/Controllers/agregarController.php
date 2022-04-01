<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Usuario;

class agregarController extends Controller
{
    public function usuarioCrear(Request $request) {
        $usuario = new Usuario();

        $usuario->nombre=$request->nombre;
        $usuario->apellido=$request->apellido;
        $usuario->email=$request->email;
        $usuario->dni=$request->dni;
        $usuario->rol_id=$request->rol_id;

        $usuario->save();
        return redirect()->route('nav.administrar');
    }


    public function rolCrear(Request $request) {
        $rol = new Role();
        $rol->rol=$request->rol;
        $rol->save();
        return redirect()->route('nav.administrar');
    }
}
