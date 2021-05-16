<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use App\Models\User;
use App\Models\Clase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(){

        //$users = DB::table('users')->get();

        $users = User::all();

        $title = 'Listado de usuarios';

//        return view('users')
//            -> with('users', $users)
//            ->with('title', 'Listado de usuarios');

//        return view('users.index')
//            ->with('users', User::all())
//            ->with('title', 'Listado de usuarios');

        return view('users.index', compact('title', 'users'));
    }

    public function logueo(){
        return view('logueo');
    }

    public function trainer(){
        $users = User::all();
        $professions = Profession::all();

        $title = 'Listado de empleados';

        return view('trainer.index', compact('title', 'users', 'professions'));
    }

    public function clases(){
        $clases = Clase::all();
        $professions = Profession::all();
        $users = User::all();

        $title = 'Actividades & Horarios';

        return view('clases.index', compact('title', 'clases', 'users', 'professions'));
    }

    public function showFitness()
    {
        $title = 'Fitness';

        return view('clases.fitness', compact('title'));
    }

    public function show(User $user) //$id
    {
        //$user = User::findOrFail($user); //$id

        return view('users.show', compact('user'));
    }
    public function showEntrenador(User $user) //$id
    {
        //$user = User::findOrFail($user); //$id

        return view('trainer.show', compact('user'));
    }

    public function create(){
        $professions = Profession::all();
        return view('users.create', compact('professions'));
    }

    public function store(){
        //return redirect('usuarios/nuevo')->withInput(); -- Otra forma de hacer que permanezca el dato del campo email (de create.blade.php)

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
                'name' => $data['name'], //name tiene que coincidir con el name del label de create.blade.php
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'is_empleado' => 0,
                'profession_id' => $data['profession_id'],
            ]);
        }

        return redirect()->route('users.index');
    }

    public function edit(User $user){
        return view('users.edit', ['user' => $user]);
    }

    public function editEntrenador(User $user){
        return view('trainer.edit', ['user' => $user]);
    }

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

    public function destroy(User $user){

        $user->delete();

        return redirect()->route('users.index');
    }

    public function destroyEntrenador(User $user){

        $user->delete();

        return redirect()->route('trainer.index');
    }
    public function admin(User $user){

        $user = DB::table('users')->where('is_admin', '1');

        return view('admin.home');
    }
}
