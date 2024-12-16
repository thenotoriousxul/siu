<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RolesAndUsersSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::create(['name' => 'admin']);
        $empleadoRole = Role::create(['name' => 'empleado']);

        $admin = User::create([
            'name' => 'Administrador',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);
        $admin->assignRole('admin');

        $empleado = User::create([
            'name' => 'Empleado',
            'email' => 'empleado@example.com',
            'password' => Hash::make('password'), 
        ]);
        $empleado->assignRole('empleado');
    }
}
