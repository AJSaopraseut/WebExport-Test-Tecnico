<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class administrarController extends Controller
{
    public function usuarioEditar($id)
    {
        $usuarioTarget = Usuario::find($id);
        $roles = Role::all();
        $data = [
            'usuarioTarget' => $usuarioTarget,
            'roles' => $roles
        ];
        return view("modificar-usuario", $data);
    }

    public function usuarioGuardarCambios(Request $request)
    {
        $usuario = Usuario::find($request->id);

        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->email = $request->email;
        $usuario->dni = $request->dni;
        $usuario->rol_id = $request->rol_id;

        $usuario->save();
        return redirect()->route('nav.administrar');
    }

    public function usuarioBorrar($id)
    {
        $usuarioTarget = Usuario::find($id);
        $usuarioTarget->delete();
        return redirect()->route('nav.administrar');
    }



    public function rolEditar($id)
    {
        $rolTarget = Role::find($id);
        $data = [
            'rolTarget' => $rolTarget
        ];
        return view("modificar-rol", $data);
    }

    public function rolGuardarCambios(Request $request)
    {
        $rol = Role::find($request->id);
        $rol->rol = $request->rol;
        $rol->save();
        return redirect()->route('nav.administrar');
    }

    public function rolBorrar($id)
    {
        $borrar = 0;
        $usuarios = Usuario::all();
        foreach ($usuarios as $usuario) {
            if ($usuario->rol_id == $id) {
                $borrar = 1;
            }
        }
        if ($borrar == 1) {
            return redirect()->back()->with('alert', 'El rol no se puede borrar debido a que tiene al menos un usuario usandolo.');
        } else {
            $rolTarget = Role::find($id);
            $rolTarget->delete();
            return redirect()->route('nav.administrar');
        }
    }
    
}
