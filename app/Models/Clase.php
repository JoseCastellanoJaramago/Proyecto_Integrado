<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['nombre', 'horario', 'dia' , 'plazas']; //Atributos que queremos permitir que se carguen de forma masiva (MassAssignmentException)

    public function users(){ // Una profesión tiene muchos usuarios
        return $this->hasMany(User::class);
    }
}
