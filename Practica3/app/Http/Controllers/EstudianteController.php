<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\HttpCache\Esi;

class EstudianteController extends Controller
{
    public function __construct(){

    }

    //GET
    //Mando a llamar la vista del registro de estudiante
    public function vistaRegistrarEstudiante(){
        return view('estudiante.registrar_estudiante');
    }

    //Aqui se hacen las validaciones
    public function registrarEstudiante(Request $request){
        $nuevoEstudiante = $request->validate([
            //Aqui es para que todos sean requeridos, si no quiero que sean requeridos no se ponen.
            'matricula' => 'required',
            'nombre' => 'required',
            'apellidoP' => 'required',
            //Estructura tipo date
            'fechaNacimiento' => 'required|date',
            //Estructura de tipo email
            'email' => 'required|email',
            //Aqui se asignan maximos y minimos de datos ingresados
            'celular' => 'required|max:10|min:10',
        ]);

        Estudiante::create($nuevoEstudiante);
        return back()->with('success', 'Su estudiante ha sido creado con exito');
    }

    public function mostrarEstudiante(Request $request){
        $listaEstudiante = [];
        $buscarEstudiante = $request->input('busqueda');
        if($buscarEstudiante){
            $listaEstudiante = Estudiante::query()->where('matricula', 'LIKE', "%{$buscarEstudiante}%")->get();
        }else{
            $listaEstudiante = Estudiante::all();
        }
        return view('estudiante.mostrar_estudiante', compact('estudiantes'));
    }
}
