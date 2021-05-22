<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

Use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Usuario']);
        $role3 = Role::create(['name' => 'Entrenador']);

        Permission::create(['name' => 'admin.home'])->assignRole($role1);

        Permission::create(['name' => 'users.index'])->syncRoles([$role2]);
        Permission::create(['name' => 'users.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'users.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'users.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'trainer.index'])->syncRoles([$role3]);
        Permission::create(['name' => 'trainer.show'])->syncRoles([$role3]);
        Permission::create(['name' => 'trainer.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'trainer.destroy'])->syncRoles([$role1]);

    }
}
