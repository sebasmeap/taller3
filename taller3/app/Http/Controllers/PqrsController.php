<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PqrsController extends Controller
{
    public function guardar(Request $request)
    {
        // Validación del formulario
        $request->validate([
            'nombres' => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'edad' => 'required|numeric|min:5|max:100',
            'documento' => 'required|string|max:20',
            'correo' => 'required|email|max:150',
            'telefono' => 'required|string|max:20',
            'genero' => 'required|string',
            'ciudad' => 'required|string|max:100',
            'categoria' => 'required|string|max:50',
            'experiencia' => 'required|string|max:50',
        ]);

        // Guardar en la base de datos
        DB::table('atletas')->insert([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'edad' => $request->edad,
            'documento' => $request->documento,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
            'genero' => $request->genero,
            'ciudad' => $request->ciudad,
            'categoria' => $request->categoria,
            'experiencia' => $request->experiencia,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/inscripcion')
            ->with('success', 'Inscripción realizada correctamente');
    }

    public function edit($id)
    {
        $atleta = DB::table('atletas')
            ->where('id', $id)
            ->first();

        return view('editar', compact('atleta'));
    }

    public function update(Request $request, $id)
    {
        DB::table('atletas')
            ->where('id', $id)
            ->update([

                'nombres' => $request->nombres,
                'apellidos' => $request->apellidos,
                'edad' => $request->edad,
                'updated_at' => now(),

            ]);

        return redirect('/inscritos')
            ->with('success', 'Registro actualizado correctamente');
    }

    public function destroy($id)
    {
        DB::table('atletas')
            ->where('id', $id)
            ->delete();

        return redirect('/inscritos')
            ->with('success', 'Registro eliminado correctamente');
    }
}