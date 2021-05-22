<?php

namespace Database\Seeders;

use App\Models\Profession;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $professionId = Profession::where('title')->value('id'); // se puede sustituir por ->first()

        $user1 = User::create([
            'name' => 'Eva Marchena',
            'email' => 'emarchenamejias@safareyes.es',
            'password' => bcrypt('Laravel'), // bcrypt para encriptar la password
            'profession_id' => 1,
            'is_admin' => true,
            'is_empleado' => false
        ]);

        $user2 = User::create([
            'name' => 'José Castellano',
            'email' => 'jcastellanojaramago@safareyes.es',
            'password' => bcrypt('Laravel'), // bcrypt para encriptar la password
            'profession_id' => 2,
            'is_admin' => false,
            'is_empleado' => true
        ]);

        $user1->assignRole('Admin');
        $user2->assignRole('Entrenador');

        $professors = User::factory(7)->create([
            'profession_id' => rand(1,8),
            'password' => bcrypt('Laravel'),
            'is_admin' => false,
            'is_empleado' => true
        ]);
        foreach($professors as $professor){
            $professor->assignRole('Entrenador');
        }

        $users = User::factory(10)->create([
            'password' => bcrypt('Laravel'),
            'profession_id' => null,
            'ejercicios_id' => rand(1,8)
        ]);

        foreach($users as $user){
            $user->assignRole('Usuario');
        }

    }
}
