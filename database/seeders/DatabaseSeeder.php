<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'users',
            'professions'
        ]);

        // \App\Models\User::factory(10)->create();
        // Aqui se llaman a los seeder que se hayan creado
        $this->call(RoleSeeder::class);
        $this->call(ProfessionSeeder::class);
        $this->call(EjercicioSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ClaseSeeder::class);



    }

    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); //Desactiva la revisión de FK antes de eliminar

        foreach($tables as $table){
            DB::table($table)->truncate(); //Eliminar las filas
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Vuelve a activar la revisión de FK después de eliminar
    }
}
