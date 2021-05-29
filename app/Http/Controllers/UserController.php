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
    public function index(){

        $users = User::all();

        $title = 'Listado de usuarios';

        return view('users.index', compact('title', 'users'));
    }

    public function indexEjercicios(){

        $ejercicios = Ejercicio::all();

        $title = 'Listado de tablas de ejercicios';

        return view('ejercicios.index', compact('title', 'ejercicios'));
    }

    public function logueo(){
        return view('logueo');
    }

    public function actividades(){
        return view('actividades');
    }

    public function trainer(){
        $users = User::all();
        $professions = Profession::all();

        $title = 'Listado de empleados';

        return view('trainer.index', compact('title', 'users', 'professions'));
    }

    public function horariosClases(){

        return view('clases.horario');
    }

    public function clases(){
        $clases = Clase::all();
        $users = Auth::user();

        $title = 'Reservas';

        return view('clases.index', compact('title', 'clases', 'users'));
    }

    public function asignarClases(Request $request){

        $id_clase = $request->input('clases_name');
        $users = Auth::user();

        DB::table('users')
            ->where('id',auth()->user()->id)
            ->update([ 'clases_id' => $id_clase]);

        return redirect()->route('clases.horario');
    }

    public function anular(){
        $user = Auth::user();
        $clase = DB::table('clases')->select('*')->where('id','=',auth()->user()->clases_id)->get()->first();

        return view('users.anularVista', compact('user', 'clase'));
    }

    public function anularReserva(){

        DB::table('users')
            ->where('id',auth()->user()->id)
            ->update([ 'clases_id' => null]);

        return redirect()->route('clases.horario');
    }

    public function showFitness(){
        $title = 'Fitness';
        return view('clases.Fitness', compact('title'));
    }

    public function showAgua(){
        $title = 'Agua';
        return view('clases.Agua', compact('title'));
    }

    public function showAerobic(){
        $title = 'Aerobic';
        return view('clases.Aerobic', compact('title'));
    }

    public function showBodycombat(){
        $title = 'Body Combat';
        return view('clases.Body Combat', compact('title'));
    }

    public function showPilates(){
        $title = 'Pilates';
        return view('clases.Pilates', compact('title'));
    }

    public function showZumba(){
        $title = 'Zumba';
        return view('clases.Zumba', compact('title'));
    }

    public function showPadel(){
        $title = 'Pádel';
        return view('clases.Pádel', compact('title'));
    }

    public function showFisioterapia(){
        $title = 'Fisioterapia';
        return view('clases.Fisioterapia', compact('title'));
    }

    public function show(User $user) //$id
    {
        return view('users.show', compact('user'));
    }
    public function showEntrenador(User $user) //$id
    {
        return view('trainer.show', compact('user'));
    }

    public function showTrainings()
    {
        $user = Auth::user();
        $clases = DB::table('clases')->select('nombre','horario','dia','plazas')->where('id','=',auth()->user()->id)->get()->first();
        return view('trainer.trainings', compact('user', 'clases'));
    }

    public function showPerfil()
    {
        $user = Auth::user();
        $clase = DB::table('clases')->select('*')->where('id','=',auth()->user()->clases_id)->get()->first();

        return view('users.perfil', compact('user', 'clase'));
    }

    public function showTablaEj()
    {
        $user = Auth::user();
        $ejercicio = DB::table('ejercicios')->select('*')->where('id','=',auth()->user()->ejercicios_id)->get()->first();
        return view('users.tablaEj', compact('user', 'ejercicio'));
    }

    public function showEjercicios(Ejercicio $ejercicio)
    {
        return view('ejercicios.show', compact('ejercicio'));
    }


    public function create(){
        $professions = Profession::all();
        return view('users.create', compact('professions'));
    }

    public function createEjercicios(){
        return view('ejercicios.create');
    }

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



    public function storeEjercicios(){

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

    public function edit(User $user){
        return view('users.edit', ['user' => $user]);
    }

    public function editEjercicios(Ejercicio $ejercicio){
        return view('ejercicios.edit', ['ejercicio' => $ejercicio]);
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

    public function asignarAlumnos(Request $request){

        $id_u = $request->input('users_name');
        $id_ej = $request->input('ejercicios_tipo');

        DB::table('users')
            ->where('id',$id_u)
            ->update([ 'ejercicios_id' => $id_ej]);

        return redirect()->route('trainer.alumnos');
    }

    public function showAlumnos()
    {
        $users = User::all();
        $ejercicios = Ejercicio::all();

        return view('trainer.alumnos', compact('users', 'ejercicios'));
    }

    public function editAlumno(){
        $user = User::all();
        return view('trainer.alumnos', ['user' => $user]);
    }

    public function destroy(User $user){

        $user->delete();

        return redirect()->route('users.index');
    }

    public function destroyEntrenador(User $user){

        $user->delete();

        return redirect()->route('trainer.index');
    }

    public function destroyEjercicios(Ejercicio $ejercicio){

        $ejercicio->delete();

        return redirect()->route('ejercicios.index');
    }

    public function admin(User $user){

        $user = DB::table('users')->where('is_admin', '1');

        return view('admin.home');
    }

    public function contacto(){

        return view('contacto');

    }

    public function normasCovid(){

        return view('normasCovid');

    }




}
