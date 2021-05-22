<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['id', 'tipo', 'ejercicio1', 'ejercicio2', 'ejercicio3', 'ejercicio4', 'ejercicio5',
        'ejercicio6', 'ejercicio7', 'ejercicio8']; //Atributos que queremos permitir que se carguen de forma masiva (MassAssignmentException)

    public function users(){ // Una tabla de ejercicios tiene muchos usuarios
        return $this->hasMany(User::class);
    }
}
