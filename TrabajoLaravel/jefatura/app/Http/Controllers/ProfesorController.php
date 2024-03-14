<?php

namespace App\Http\Controllers;

use App\Models\Profesores;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index()
    {
        $profesores = Profesores::all();
        return view('profesores.index', compact('profesores'));
    }

    public function create()
    {
        return view('profesores.create');
    }

    public function store(Request $request)
    {
        $validacion = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'dni' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'required|string|max:255',
        ], [
            'nombre.required' => 'El nombre del profesor es obligatorio',
            'nombre.string' => 'El nombre del profesor debe ser una cadena de caracteres',
            'nombre.max' => 'El nombre del profesor no puede exceder los :max caracteres',

            'apellidos.required' => 'Los apellidos del profesor son obligatorios',
            'apellidos.string' => 'Los apellidos del profesor deben ser una cadena de caracteres',
            'apellidos.max' => 'Los apellidos del profesor no pueden exceder los :max caracteres',

            'dni.required' => 'El DNI del profesor es obligatorio',
            'dni.string' => 'El DNI del profesor debe ser una cadena de caracteres',
            'dni.max' => 'El DNI del profesor no puede exceder los :max caracteres',

            'fecha_nacimiento.required' => 'La fecha de nacimiento del profesor es obligatoria',
            'fecha_nacimiento.date' => 'La fecha de nacimiento del profesor debe ser una fecha válida',

            'telefono.required' => 'El teléfono del profesor es obligatorio',
            'telefono.string' => 'El teléfono del profesor debe ser una cadena de caracteres',
            'telefono.max' => 'El teléfono del profesor no puede exceder los :max caracteres',
        ]);

        Profesores::create([
            'nombre' => $validacion['nombre'],
            'apellidos' => $validacion['apellidos'],
            'dni' => $validacion['dni'],
            'fecha_nacimiento' => $validacion['fecha_nacimiento'],
            'telefono' => $validacion['telefono'],
        ]);

        return redirect()->route('profesores.index')->with('success', '¡Profesor creado exitosamente!');
    }

    public function edit($id)
    {
        $profesor = Profesores::find($id);
        return view('profesores.edit', compact('profesor'));
    }

    public function update(Request $request, $id)
    {
        $profesor = Profesores::find($id);
        $profesor->update([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'dni' => $request->dni,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'telefono' => $request->telefono,
        ]);
        return redirect()->route('profesores.index')->with('success', 'Profesor actualizado correctamente');
    }

    public function destroy($id)
    {
        Profesores::destroy($id);
        return redirect()->route('profesores.index');
    }
}
