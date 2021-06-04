<?php


namespace App\Http\Controllers;

use App\Models\Ejercicio;
use App\Models\Profession;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TrainerController extends Controller
{

    // Función para mostar el listado de entrenadores
    public function trainer(){
        $users = User::all();
        $professions = Profession::all();

        $title = 'LISTADO DE ENTRENADORES';

        return view('trainer.index', compact('title', 'users', 'professions'));
    }

    // Función para la vista de un entrenador
    public function showEntrenador(User $user) //$id
    {
        return view('trainer.show', compact('user'));
    }

    // Función para ver el perfil del entrenador logeado
    public function showTrainings()
    {
        $user = Auth::user();
        $clases = DB::table('clases')->select('nombre','horario','dia','plazas')->where('id','=',auth()->user()->id)->get()->first();
        return view('trainer.trainings', compact('user', 'clases'));
    }

    // Función para editar el entrenador logeado
    public function editEntrenador(User $user){
        return view('trainer.edit', ['user' => $user]);
    }

    // Función para asignar tablas de ejercicios a los alumnos
    public function asignarAlumnos(Request $request){

        $id_u = $request->input('users_name');
        $id_ej = $request->input('ejercicios_tipo');

        DB::table('users')
            ->where('id',$id_u)
            ->update([ 'ejercicios_id' => $id_ej]);

        return redirect()->route('trainer.alumnos');
    }

    // Función para la vista de asignar tablas de ejercicios
    public function showAlumnos()
    {
        $users = User::all();
        $ejercicios = Ejercicio::all();

        return view('trainer.alumnos', compact('users', 'ejercicios'));
    }

    // Función para editar un entrenador
    public function editAlumno(){
        $user = User::all();
        return view('trainer.alumnos', ['user' => $user]);
    }

    // Función para borrar un entrenador
    public function destroyEntrenador(User $user){

        $user->delete();

        return redirect()->route('trainer.index');
    }

}
