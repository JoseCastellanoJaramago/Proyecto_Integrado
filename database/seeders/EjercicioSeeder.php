<?php

namespace Database\Seeders;

use App\Models\Ejercicio;
use Illuminate\Database\Seeder;


class EjercicioSeeder extends Seeder
{
    public function run()
    {
        Ejercicio::create([
            'tipo' => 'Perder peso',
            'ejercicio1' => 'Sentadillas (40x20x7)',
            'ejercicio2' => 'Lunch -tijeras- (40x20x7)',
            'ejercicio3' => 'Puente de glúteos (40x20x7)',
            'ejercicio4' => 'Planchas (40x20x7)',
            'ejercicio5' => 'Climbers (40x20x7)',
            'ejercicio6' => 'Planchas isométricas (40x20x7)',
            'ejercicio7' => 'Burpees (40x20x7)'
        ]);

        Ejercicio::create([
            'tipo' => 'Pectorales',
            'ejercicio1' => 'Calentamiento con banda de resistencia (3x12)',
            'ejercicio2' => 'Mancuernas contra el pecho (3x12)',
            'ejercicio3' => 'Press de banca inclinado (3x12)',
            'ejercicio4' => 'Flexiones con peso (3x12)',
            'ejercicio5' => 'Press de banca con agarre cerrado (3x12)'
        ]);

        Ejercicio::create([
            'tipo' => 'Abdominales',
            'ejercicio1' => 'Sit up (3x12)',
            'ejercicio2' => 'Crunch con piernas elevadas (3x12)',
            'ejercicio3' => 'Sit up con med ball (3x12)',
            'ejercicio4' => 'Elevación de piernas (3x12)',
            'ejercicio5' => 'Plancha inferior con Glidings (3x12)',
            'ejercicio6' => 'Bicicleta (3x12)',
            'ejercicio7' => 'Oblicuos utilizando un foam (3x12)',
            'ejercicio8' => 'Plancha con fitball (3x12)'
        ]);

        Ejercicio::create([
            'tipo' => 'Glúteos',
            'ejercicio1' => 'Sentadilla (3x12)',
            'ejercicio2' => 'Zancadas alternas (3x12)',
            'ejercicio3' => 'Puente de glúteo (3x12)',
            'ejercicio4' => 'Peso muerto (3x12)',
            'ejercicio5' => 'Zancada lateral (3x12)',
            'ejercicio6' => 'Step up alterno (3x12)',
            'ejercicio7' => 'Frog pump (3x12)',
            'ejercicio8' => 'Abducción patada lateral (3x12)'
        ]);

        Ejercicio::create([
            'tipo' => 'Espalda',
            'ejercicio1' => 'Dominadas (3x12)',
            'ejercicio2' => 'Remo con barra (3x12)',
            'ejercicio3' => 'Jalones al pecho (3x12)',
            'ejercicio4' => 'Remo en polea baja (3x12)',
            'ejercicio5' => 'Remo con mancuernas (3x12)',
            'ejercicio6' => 'Remo en máquina horizontal (3x12)',
            'ejercicio7' => 'Pull over en ponea alta con brazos extendidos (3x12)',
            'ejercicio8' => 'Remo en barra T (3x12)'
        ]);

        Ejercicio::create([
            'tipo' => 'Piernas',
            'ejercicio1' => 'Sentadillas (3x12)',
            'ejercicio2' => 'Hip thrust (3x12)',
            'ejercicio3' => 'Zancadas (3x12)',
            'ejercicio4' => 'Prensa (3x12)',
            'ejercicio5' => 'Elevaciones de gemelos (3x12)'
        ]);

        Ejercicio::create([
            'tipo' => 'Cuádriceps',
            'ejercicio1' => 'Sentadillas (3x12)',
            'ejercicio2' => 'Zancadas inversas (3x12)',
            'ejercicio3' => 'Step ups (3x12)',
            'ejercicio4' => 'Sprint en cuesta (3x12)',
            'ejercicio5' => 'Sentadillas pistol(3x12)'
        ]);

        Ejercicio::create([
            'tipo' => 'Lumbares',
            'ejercicio1' => 'Peso muerto (3x12)',
            'ejercicio2' => 'Puente de glúteo (3x12)',
            'ejercicio3' => 'Superman (3x12)',
            'ejercicio4' => 'Contracciones en banco (3x12)'
        ]);
    }
}
