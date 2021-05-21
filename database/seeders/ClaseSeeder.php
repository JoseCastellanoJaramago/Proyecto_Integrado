<?php

namespace Database\Seeders;

use App\Models\Clase;
use Illuminate\Database\Seeder;

class ClaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clase::create([
            'nombre' => 'Fitness',
            'horario' => '08:00-09:00',
            'dia' => 'Lunes',
            'plazas' => '15',
            'profession_id' => 1,
            'user_id' => 2
        ]);

        Clase::create([
            'nombre' => 'Agua',
            'horario' => '10:00-11:00',
            'dia' => 'Martes',
            'plazas' => '15',
            'profession_id' => 2,
            'user_id' => 3
        ]);

        Clase::create([
            'nombre' => 'Aerobic',
            'horario' => '12:00-13:00',
            'dia' => 'Lunes',
            'plazas' => '15',
            'profession_id' => 3,
            'user_id' => 4
        ]);

        Clase::create([
            'nombre' => 'Body Combat',
            'horario' => '10:00-11:00',
            'dia' => 'Miércoles',
            'plazas' => '15',
            'profession_id' => 4,
            'user_id' => 5
        ]);

        Clase::create([
            'nombre' => 'Pilates',
            'horario' => '09:00-12:00',
            'dia' => 'Jueves',
            'plazas' => '15',
            'profession_id' => 5,
            'user_id' => 6
        ]);

        Clase::create([
            'nombre' => 'Zumba',
            'horario' => '18:00-19:00',
            'dia' => 'Viernes',
            'plazas' => '15',
            'profession_id' => 6,
            'user_id' => 7
        ]);

        Clase::create([
            'nombre' => 'Pádel',
            'horario' => '20:00-21:00',
            'dia' => 'Lunes',
            'plazas' => '15',
            'profession_id' => 7,
            'user_id' => 8
        ]);

        Clase::create([
            'nombre' => 'Fisioterapia',
            'horario' => '16:00-17:00',
            'dia' => 'Martes',
            'plazas' => '15',
            'profession_id' => 8,
            'user_id' => 9
        ]);
    }
}
