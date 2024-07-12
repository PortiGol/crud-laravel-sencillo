<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estudiantes;
use  Illuminate\Support\Facades\Validator;
class estudianteControlador extends Controller
{
    public function Index(){

        $estudiantes = Estudiantes::all();
        if ($estudiantes->isEmpty()) {
            return response()->json(['message' => 'No hay estudiantes registrados'], 404);
        }
        return response()->json($estudiantes, 200);

    }
    
    public function store(Request $request ){

       $validator = validator::make($request->all(),[

            'Nombre' => 'required|max:255',
            'Apellido'=> 'required',
            'Celular'=> 'required|digits:10',
            'Curso'=> 'required|in:curso1, curso2, curso3, curso4, curso5, curso6'

        ]);
        if($validator-> fails()){
            $data = [ 

                'message' => 'Error en la validacion de los Datos',
                'errors' =>   $validator->errors(),
                'status' => 400
                

            ];

            return response()->json($data,400);


        }
        $estudiantes = Estudiantes::create([
            'Nombre' => $request->Nombre,
            'Apellido'=> $request->Apellido,
            'Celular'=> $request->Celular,
            'Curso'=> $request->Curso


        ]);
        if(!$estudiantes){
            $data = [
                'message' => 'Error en la creacion del estudiante',
                'status' => 500
                
            ];
            return response()->json($data,500);
        }
        $data = [
            '$estudiantes' => $estudiantes,
            'status' => 201
            
        ];

        return response()->json($data,201);



    }



    public function Show($id){

        $estudiantes= Estudiantes::find($id);
        if (!$estudiantes) {
            $data = [
                'message' => 'Estudiante no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        $data = [
            'estudiantes' => $estudiantes,
            'status' => 200
        ];

        return response()->json($data, 200);





    }
    public function Destroy($id)
    {
        $estudiantes = Estudiantes::find($id);

        if (!$estudiantes) {
            $data = [
                'message' => 'Estudiante no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        
        $estudiantes->delete();

        $data = [
            'message' => 'Estudiante eliminado',
            'status' => 200
        ];

        return response()->json($data, 200);
    }
    public function Update(Request $request, $id)
    {
        $estudiantes = Estudiantes::find($id);

        if (!$estudiantes) {
            $data = [
                'message' => 'Estudiante no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $validator = Validator::make($request->all(), [
            'Nombre' => 'required|max:255',
            'Apellido' => 'required|max:255',
            'Celular' => 'required|digits:10',
            'Curso' => 'required|in:curso1,curso2,curso3,curso4,curso5,curso6'
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        $estudiantes->Nombre = $request->Nombre;
        $estudiantes->Apellido = $request->Apellido;
        $estudiantes->Celular = $request->Celular;
        $estudiantes->Curso = $request->Curso;

        $estudiantes->save();

        $data = [
            'message' => 'Estudiante actualizado',
            'estudiante' => $estudiantes,
            'status' => 200
        ];

        return response()->json($data, 200);

    }
    public function UpdatePartial(Request $request, $id)
    {
        $estudiantes = Estudiantes::find($id);

        if (!$estudiantes) {
            $data = [
                'message' => 'Estudiante no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $validator = Validator::make($request->all(), [
            'Nombre' => 'max:255',
            'Apellido' => 'max:255',
            'Celular' => 'digits:10',
            'Curso' => 'in:curso1,curso2,curso3,curso4,curso5,curso6'
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        if ($request->has('Nombre')) {
            $estudiantes->Nombre = $request->Nombre;
        }

        if ($request->has('Apellido')) {
            $estudiantes->Apellido = $request->Apellido;
        }

        if ($request->has('Celular')) {
            $estudiantes->Celular = $request->Celular;
        }

        if ($request->has('Curso')) {
            $estudiantes->Curso= $request->Curso;
        }

        $estudiantes->save();

        $data = [
            'message' => 'Estudiante actualizado',
            'estudiante' => $estudiantes,
            'status' => 200
        ];

        return response()->json($data, 200);
    }
}
