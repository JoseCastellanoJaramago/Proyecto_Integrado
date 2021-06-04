<?php


namespace App\Http\Controllers;

use App\Models\Ejercicio;

class EjerciciosController extends Controller
{

    // Función para rellenar la tabla de ejercicios
    public function indexEjercicios(){

        $ejercicios = Ejercicio::all();

        $title = 'LISTADO DE TABLAS DE EJERCICIOS';

        return view('ejercicios.index', compact('title', 'ejercicios'));
    }

    // Función para mostrar la vista de ejercicios
    public function showEjercicios(Ejercicio $ejercicio)
    {
        return view('ejercicios.show', compact('ejercicio'));
    }

    // Función para la vista de creación de los ejercicios
    public function createEjercicios(){
        return view('ejercicios.create');
    }

    // Función para almacenar los ejercicios en la base de datos
    public function storeEjercicios(){

        // Obtiene los datos de la vista
        $data = request()->validate([ //validate devuelve los campos que se le incluyan --aunque no tengan ninguna regla--
            'tipo' => 'required',
            'ejercicio1' => 'required',
            'ejercicio2' => 'nullable',
            'ejercicio3' => 'nullable',
            'ejercicio4' => 'nullable',
            'ejercicio5' => 'nullable',
            'ejercicio6' => 'nullable',
            'ejercicio7' => 'nullable',
            'ejercicio8' => 'nullable'
        ], [
            'tipo.required' => 'El campo tipo es obligatorio'
        ]);

        // Crea los ejercicios en la base de datos
        Ejercicio::create([
            'tipo' => $data['tipo'], //name tiene que coincidir con el name del label de createEj.blade.php
            'ejercicio1' => $data['ejercicio1'],
            'ejercicio2' => $data['ejercicio2'],
            'ejercicio3' => $data['ejercicio3'],
            'ejercicio4' => $data['ejercicio4'],
            'ejercicio5' => $data['ejercicio5'],
            'ejercicio6' => $data['ejercicio6'],
            'ejercicio7' => $data['ejercicio7'],
            'ejercicio8' => $data['ejercicio8'],
        ]);

        return redirect()->route('ejercicios.index');
    }

    // Función para la vista de edición de los ejercicios
    public function editEjercicios(Ejercicio $ejercicio){
        return view('ejercicios.edit', ['ejercicio' => $ejercicio]);
    }

    // Función para actualizar los ejercicios en la base de datos
    public function updateEjercicios(Ejercicio $ejercicio){

        $data = request()->validate([
            'tipo' => 'required',
            'ejercicio1' => 'required',
            'ejercicio2' => 'nullable',
            'ejercicio3' => 'nullable',
            'ejercicio4' => 'nullable',
            'ejercicio5' => 'nullable',
            'ejercicio6' => 'nullable',
            'ejercicio7' => 'nullable',
            'ejercicio8' => 'nullable',
        ]);

        $ejercicio->update($data);

        return redirect()->route('ejercicios.show', ['ejercicio' => $ejercicio]);
    }

    // Función para eliminar ejercicios
    public function destroyEjercicios(Ejercicio $ejercicio){

        $ejercicio->delete();

        return redirect()->route('ejercicios.index');
    }

}
