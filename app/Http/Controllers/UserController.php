<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Historial;

class UserController extends Controller
{
    // Método para listar todos los usuarios
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // Método para mostrar un usuario específico
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    // Método para mostrar el formulario de edición
    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('users.edit', compact('users'));
    }

    // Método para actualizar un registro
    public function update(Request $request, $id)
    {
        
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        //dd($data);

        $registro = User::findOrFail($id);
        $registro->update($data);

        Historial::create([
            'accion' => 'actualizacion',
            'descripcion' => "Se actualizo el registro {$registro->nombre}",
            'registro_id' => $registro->id,
        ]);

        return redirect()->route('users.index')->with('success', 'Registro actualizado exitosamente.');
    }


    public function search(Request $request)
    {
        $query = $request->get('query');
        $users = User::where('name', 'like', '%' . $query . '%')
                            ->orWhere('email', 'like', '%' . $query . '%')
                            ->get();

        return view('users._employee_list', compact('users'));
    }

    // Otros métodos para crear, actualizar y eliminar usuarios pueden agregarse aquí
}
