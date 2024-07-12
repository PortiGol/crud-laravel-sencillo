<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiantes;
use Illuminate\Support\Facades\Validator;

class EstudiantesWebController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiantes::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create()
    {
        return view('estudiantes.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Nombre' => 'required|max:255',
            'Apellido' => 'required|max:255',
            'Celular' => 'required|digits:10',
            'Curso' => 'required|in:curso1,curso2,curso3,curso4,curso5,curso6'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Estudiantes::create($request->all());
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante creado exitosamente');
    }

    public function edit($id)
    {
        $estudiante = Estudiantes::findOrFail($id);
        return view('estudiantes.edit', ['estudiante' => $estudiante]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'Nombre' => 'required|max:255',
            'Apellido' => 'required|max:255',
            'Celular' => 'required|digits:10',
            'Curso' => 'required|in:curso1,curso2,curso3,curso4,curso5,curso6'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $estudiante = Estudiantes::findOrFail($id);
        $estudiante->update($request->all());

        return redirect()->route('estudiantes.index')->with('success', 'Estudiante actualizado exitosamente');
    }

    public function destroy($id)
    {
        $estudiante = Estudiantes::findOrFail($id);
        $estudiante->delete();
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante eliminado exitosamente');
    }
}
