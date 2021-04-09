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
            'title' => 'Desarrolador back-end'
        ]);

        Profession::create([
            'title' => 'Desarrolador front-end'
        ]);

        Profession::create([
            'title' => 'Diseñador web'
        ]);

        Profession::factory(17)->create();
    }
}
