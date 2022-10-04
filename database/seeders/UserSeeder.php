<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Usuario Administrador',
            'email' =>'administrador@gmail.com',
            'password' => '$2y$10$OGQJXotRJOPr1mjmMzTr3.2TobzU0yoljfH4feBoWZ/otY96Oye/a',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
         ])->assignRole('Administrador');
         
 
         User::create([
             'name' => 'Usuario Cliente',
             'email' =>'cliente@gmail.com',
             'password' => '$2y$10$OGQJXotRJOPr1mjmMzTr3.2TobzU0yoljfH4feBoWZ/otY96Oye/a',
             'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ])->assignRole('Cliente');

 
          User::create([
             'name' => 'Usuario Tecnico',
            'email' =>'tecnico@gmail.com',
            'password' => '$2y$10$OGQJXotRJOPr1mjmMzTr3.2TobzU0yoljfH4feBoWZ/otY96Oye/a',
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s')
          ])->assignRole('Tecnico');

          User::create([
            'name' => 'Tecnico 1',
            'email' => 'Tecnico1@gmail.com',
            'password' => '$2y$10$OGQJXotRJOPr1mjmMzTr3.2TobzU0yoljfH4feBoWZ/otY96Oye/a',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
         ])->assignRole('Tecnico');
 
         User::create([
             'name' => 'Tecnico 2',
             'email' =>'Tecnico2@gmail.com',
             'password' => '$2y$10$OGQJXotRJOPr1mjmMzTr3.2TobzU0yoljfH4feBoWZ/otY96Oye/a',
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s')
          ])->assignRole('Tecnico');
 
          User::create([
             'name' => 'Tecnico 3',
             'email' => 'Tecnico3@gmail.com',
             'password' => '$2y$10$OGQJXotRJOPr1mjmMzTr3.2TobzU0yoljfH4feBoWZ/otY96Oye/a',
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s')
          ])->assignRole('Tecnico');
 
          User::create([
             'name' => 'Tecnico  4',
             'email' => 'Tecnico4@gmail.com',
             'password' => '$2y$10$OGQJXotRJOPr1mjmMzTr3.2TobzU0yoljfH4feBoWZ/otY96Oye/a',
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s')
          ]);
 
          User::create([
             'name' => 'Tecnico 5',
             'email' => 'Tecnico5@gmail.com',
             'password' => '$2y$10$OGQJXotRJOPr1mjmMzTr3.2TobzU0yoljfH4feBoWZ/otY96Oye/a',
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s')
          ])->assignRole('Tecnico');
 

          User::create([
            'name' => 'Juan Cruz Santo',
            'email' => 'correo1@correo.com',
            'password' => '$2y$10$OGQJXotRJOPr1mjmMzTr3.2TobzU0yoljfH4feBoWZ/otY96Oye/a',

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
         ])->assignRole('cliente');
 
         User::create([
             'name' => 'Cliente 2',
             'email' =>'correo2@correo.com',
             'password' => '$2y$10$OGQJXotRJOPr1mjmMzTr3.2TobzU0yoljfH4feBoWZ/otY96Oye/a',

             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s')
          ])->assignRole('cliente');
 
          User::create([
             'name' => 'Cliente 3',
             'email' => 'correo3@correo.com',
             'password' => '$2y$10$OGQJXotRJOPr1mjmMzTr3.2TobzU0yoljfH4feBoWZ/otY96Oye/a',

             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s')
          ])->assignRole('cliente');
 
          User::create([
             'name' => 'Cliente 4',
             'email' => 'correo4@correo.com',
             'password' => '$2y$10$OGQJXotRJOPr1mjmMzTr3.2TobzU0yoljfH4feBoWZ/otY96Oye/a',

             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s')
          ])->assignRole('cliente');
 
          User::create([
             'name' => 'Cliente 5',
             'email' => 'correo5@correo.com',
             'password' => '$2y$10$OGQJXotRJOPr1mjmMzTr3.2TobzU0yoljfH4feBoWZ/otY96Oye/a',

             
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s')
          ])->assignRole('cliente');

    }
}
