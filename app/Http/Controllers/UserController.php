<?php

namespace App\Http\Controllers;

use App\Models\Clase;
use App\Models\Ejercicio;
use App\Models\Profession;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Barryvdh\DomPDF\Facade as PDF;

class UserController extends Controller
{

    // Función para ver el listado de usuarios
    public function index(){

        $users = User::all();

        $title = 'LISTADO DE USUARIOS';

        return view('users.index', compact('title', 'users'));
    }

    // Función para ver la vista de actividades
    public function actividades(){
        return view('actividades');
    }

    // Función para ver la vista del usuario elegido en la tabla de usuarios
    public function show(User $user) //$id
    {
        return view('users.show', compact('user'));
    }

    // Función para mostrar el perfil del usuario logeado
    public function showPerfil()
    {
        $user = Auth::user();
        $clase = DB::table('clases')->select('*')->where('id','=',auth()->user()->clases_id)->get()->first();

        return view('users.perfil', compact('user', 'clase'));
    }

    // Función para mostrar la tabla de ejercicios
    public function showTablaEj()
    {
        $user = Auth::user();
        $ejercicio = DB::table('ejercicios')->select('*')->where('id','=',auth()->user()->ejercicios_id)->get()->first();
        return view('users.tablaEj', compact('user', 'ejercicio'));
    }

    // Función para la vista de creación de un usuario
    public function create(){
        $professions = Profession::all();
        return view('users.create', compact('professions'));
    }

    // Función para almacenar el usuario creado
    public function store(){

        $data = request()->validate([ //validate devuelve los campos que se le incluyan --aunque no tengan ninguna regla--
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users,email'], //Otra forma de hacerlo: 'required|email', 'unique:users,email'->tabla,nombrecampotabla
            'password' => 'required',
            'is_empleado' => 'nullable',
            'profession_id' => 'nullable'
        ], [
            'name.required' => 'El campo nombre es obligatorio'
        ]);

        $profession_id = Profession::find($data['profession_id']);
        if ($profession_id != null){
            $profession_id->users()->create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'is_empleado' => 1,
            ]);
        } else {
            User::create([
                'name' => $data['name'], //name tiene que coincidir con el name del label de createEj.blade.php
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'is_empleado' => 0,
                'profession_id' => $data['profession_id'],
            ]);
        }

        return redirect()->route('users.index');
    }

    // Función para la vista de edición del usuario que pasa por parámetros el usuario elegido en la tabla de usuarios
    public function edit(User $user){
        return view('users.edit', ['user' => $user]);
    }

    // Función para actualizar en la base de datos el usuario previamente modificado
    public function update(User $user){

        $data = request()->validate([
            'name' => 'required',
            'email' => ['required','email', Rule::unique('users')->ignore($user->id)],
            'password' => ''
        ]);

        if($data['password'] != null){ // Si la contraseña no es nula, encriptarla
            $data['password'] = bcrypt($data['password']);
        }else{ // Si la contraseña es nula eliminarla antes de actualizar
            unset($data['password']);
        }

        $user->update($data);

        return redirect()->route('users.show', ['user' => $user]);
    }

    // Función para borrar un usuario
    public function destroy(User $user){

        $user->delete();

        return redirect()->route('users.index');
    }

    // Función para la vista de administración de usuarios
    public function admin(User $user){

        $user = DB::table('users')->where('is_admin', '1');

        return view('admin.home');
    }

    // Función de la vista contacto
    public function contacto(){

        return view('contacto');

    }

    // Función de la vista normasCovid
    public function normasCovid(){

        return view('normasCovid');

    }

    // Función de la vista normasCovid
    public function precios(){

        return view('precios');

    }

    // Función para descargar el horario en formato jpg
    public function download(){
        $file= public_path(). "/img/HorarioSafagym.jpg";

        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, 'HorarioSafagym.jpg', $headers);
    }
}
