<?php

namespace Database\Seeders;

use App\Models\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// Insert con SQL
//        DB::insert('INSERT INTO professions (title) VALUES (:title)', [
//            'title' => 'Desarrollador back-end'
//        ]);

// Insert con constructor de consultas
//        DB::table('professions')->insert([
//            'title' => 'Desarrolador back-end'
//        ]);

// Insert con modelo de laravel

        Profession::create([
            'title' => 'Fitness'
        ]);

        Profession::create([
            'title' => 'Agua'
        ]);

        Profession::create([
            'title' => 'Aerobic'
        ]);

        Profession::create([
            'title' => 'Body Combat'
        ]);

        Profession::create([
            'title' => 'Pilates'
        ]);

        Profession::create([
            'title' => 'Zumba'
        ]);

        Profession::create([
            'title' => 'Pádel'
        ]);

        Profession::create([
            'title' => 'Fisioterapia'
        ]);
    }
}
