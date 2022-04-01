<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class navegacionController extends Controller
{
    public function verTodo() {
        $usuarios = Usuario::all();
        foreach ($usuarios as $usuario)
        {
            $usuario->rol_id = Role::select('rol')->where('id', $usuario->rol_id)->get();
        }
        $roles = Role::all();
        $data = [
            'usuarios' => $usuarios,
            'roles' => $roles
        ];
        return view("ver-todo", $data);
    }



    public function administrar() {
        $usuarios = Usuario::all();
        foreach ($usuarios as $usuario)
        {
            $usuario->rol_id = Role::select('rol')->where('id', $usuario->rol_id)->get();
        }
        $roles = Role::all();
        $data = [
            'usuarios' => $usuarios,
            'roles' => $roles
        ];
        return view("administrar", $data);
    }


    
    public function crear() {
        $roles = Role::all();
        $data = [
            'roles' => $roles
        ];
        return view("crear", $data);
    }
}
