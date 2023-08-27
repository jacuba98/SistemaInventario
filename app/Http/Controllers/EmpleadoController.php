<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use App\Models\Historial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
    }

    public function create()
    {
        return view('empleados.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
        ]);

        $registro = Empleado::create($data);

        Historial::create([
            'accion' => 'creacion',
            'descripcion' => "Se creó el registro {$registro->nombre}",
            'registro_id' => $registro->id,
        ]);

        return redirect()->route('empleados.index')->with('success', 'Registro creado exitosamente.');
    }

    // Método para mostrar un registro específico
    public function show($id)
    {
        $registro = Empleado::findOrFail($id);
        return view('empleados.show', compact('registro'));
    }

    // Método para mostrar el formulario de edición
    public function edit($id)
    {
        $registro = Empleado::findOrFail($id);
        return view('empleados.edit', compact('registro'));
    }

    // Método para actualizar un registro
    public function update(Request $request, $id)
    {
        
        $data = $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required',
        ]);

        //dd($data);

        $registro = Empleado::findOrFail($id);
        $registro->update($data);

        Historial::create([
            'accion' => 'actualizacion',
            'descripcion' => "Se actualizo el registro {$registro->nombre}",
            'registro_id' => $registro->id,
        ]);

        return redirect()->route('empleados.index')->with('success', 'Registro actualizado exitosamente.');
    }

    // Método para eliminar un registro
    public function destroy($id)
    {
        $registro = Empleado::findOrFail($id);
        $registro->delete();

        Historial::create([
            'accion' => 'Eliminacion',
            'descripcion' => "Se elimino el registro {$registro->nombre}",
            'registro_id' => $registro->id,
        ]);

        Session::flash('success', 'Registro eliminado exitosamente.');

        return Redirect::route('empleados.index');
    }

    public function search(Request $request)
    {
        $query = $request->get('query');
        $empleados = Empleado::where('nombre', 'like', '%' . $query . '%')
                            ->orWhere('correo', 'like', '%' . $query . '%')
                            ->get();

        return view('empleados._employee_list', compact('empleados'));
    }
}
