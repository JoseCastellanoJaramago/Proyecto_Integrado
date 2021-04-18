<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use App\Models\User;
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

        return view('users.trainer', compact('title', 'users', 'professions'));
    }

    public function show(User $user) //$id
    {
        //$user = User::findOrFail($user); //$id

        return view('users.show', compact('user'));
    }

    public function create(){
        return view('users.create');
    }

    public function store(){
        //return redirect('usuarios/nuevo')->withInput(); -- Otra forma de hacer que permanezca el dato del campo email (de create.blade.php)

        $data = request()->validate([ //validate devuelve los campos que se le incluyan --aunque no tengan ninguna regla--
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users,email'], //Otra forma de hacerlo: 'required|email', 'unique:users,email'->tabla,nombrecampotabla
            'password' => 'required'
        ], [
            'name.required' => 'El campo nombre es obligatorio'
        ]);

        User::create([
            'name' => $data['name'], //name tiene que coincidir con el name del label de create.blade.php
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        return redirect()->route('users.index');
    }

    public function edit(User $user){
        return view('users.edit', ['user' => $user]);
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
}
