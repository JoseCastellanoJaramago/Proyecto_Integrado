<?php


namespace App\Http\Controllers;

use App\Models\Clase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClaseController extends Controller
{
    // Función para mostrar las reservas de las clases
    public function clases(){
        $clases = Clase::all();
        $users = Auth::user();

        $title = 'Reservas';

        return view('clases.index', compact('title', 'clases', 'users'));
    }

    // Función para mostrar el horario
    public function horariosClases(){

        return view('clases.horario');
    }

    // Función para que los usuarios reserven las diferentes clases
    public function asignarClases(Request $request){
        // Recojo la clase que haya seleccionado el usuario mediante el select de la vista
        $id_clase = $request->input('clases_name');
        $users = Auth::user();

        // Se realizan las correspondientes operaciones en la base de datos
        DB::table('users')
            ->where('id',auth()->user()->id)
            ->update([ 'clases_id' => $id_clase]);

        if($id_clase != null){
            DB::table('reservas')->insert([
                'clases_id' => $id_clase,
                'user_id' => auth()->user()->id
            ]);
        }

        Clase::where('id', $id_clase)->update(['plazas' => DB::raw('plazas - 1')]);

        return redirect()->route('clases.horario');
    }

    // Función para rellenar la vista para anular reserva.
    public function anular(){
        $user = Auth::user();
        $clase = DB::table('clases')->select('*')->where('id','=',auth()->user()->clases_id)->get()->first();

        return view('users.anularVista', compact('user', 'clase'));
    }

    // Función para anular la reserva que haya realizado el usuario
    public function anularReserva(){

        DB::table('users')
            ->where('id',auth()->user()->id)
            ->update([ 'clases_id' => null]);

        Clase::where('id', auth()->user()->clases_id)->update(['plazas' => DB::raw('plazas + 1')]);

        return redirect()->route('clases.horario');
    }

    // Función para mostrar la vista Fitness
    public function showFitness(){
        $title = 'Fitness';
        return view('clases.Fitness', compact('title'));
    }

    // Función para mostrar la vista Agua
    public function showAgua(){
        $title = 'Agua';
        return view('clases.Agua', compact('title'));
    }

    // Función para mostrar la vista Aerobic
    public function showAerobic(){
        $title = 'Aerobic';
        return view('clases.Aerobic', compact('title'));
    }

    // Función para mostrar la vista BodyCombat
    public function showBodycombat(){
        $title = 'Body Combat';
        return view('clases.Body Combat', compact('title'));
    }

    // Función para mostrar la vista Pilates
    public function showPilates(){
        $title = 'Pilates';
        return view('clases.Pilates', compact('title'));
    }

    // Función para mostrar la vista Zumba
    public function showZumba(){
        $title = 'Zumba';
        return view('clases.Zumba', compact('title'));
    }

    // Función para mostrar la vista Padel
    public function showPadel(){
        $title = 'Pádel';
        return view('clases.Pádel', compact('title'));
    }

    // Función para mostrar la vista Fisioterapia
    public function showFisioterapia(){
        $title = 'Fisioterapia';
        return view('clases.Fisioterapia', compact('title'));
    }
}
