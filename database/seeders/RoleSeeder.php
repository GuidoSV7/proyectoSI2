<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


//Spatie
use Spatie\Permission\Models\Role;
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
        $role1 = Role::create(['name'=>'Administrador']);
        $role2 = Role::create(['name'=>'Cliente']);
        $role3 = Role::create(['name'=>'Tecnico']);
        
        Permission::create(['name'=> 'dashboard'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name'=> 'tecnicos.create'])->syncRoles([$role1]);
        Permission::create(['name'=> 'tecnicos.edit'])->syncRoles([$role1]);
        Permission::create(['name'=> 'tecnicos.lista'])->syncRoles([$role1]);


        Permission::create(['name'=> 'solicitudes.create'])->syncRoles([$role2]);
        Permission::create(['name'=> 'solicitudes.lista'])->syncRoles([$role2]);
        Permission::create(['name'=> 'solicitudes.edit'])->syncRoles([$role2]);
        Permission::create(['name'=> 'solicitudes.lista_disponibles'])->syncRoles([$role1]);
        Permission::create(['name'=> 'solicitudes.lista_en_proceso'])->syncRoles([$role1]);
        Permission::create(['name'=> 'solicitudes.lista_finalizados'])->syncRoles([$role1]);

        Permission::create(['name'=> 'solicitudes.solicitudes-asignadas'])->syncRoles([$role3]);
    }
}
