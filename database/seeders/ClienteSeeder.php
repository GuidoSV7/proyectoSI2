<?php

namespace Database\Seeders;

use PhpOption\None;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
           'nombre' => 'Juan Cruz Santo',
           'correo' => 'correo1@correo.com',
           'password' => '12345678',
           'telefono' => 675442342,
           'user_id' => 9,
           'created_at' => date('Y-m-d H:i:s'),
           'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('clientes')->insert([
            'nombre' => 'Cliente 2',
            'correo' =>'correo2@correo.com',
            'password' => '12345678',
            'telefono' => 675442342,
            'user_id' => 10,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
         ]);

         DB::table('clientes')->insert([
            'nombre' => 'Cliente 3',
            'correo' => 'correo3@correo.com',
            'password' => '12345678',
            'telefono' => 675452342,
            'user_id' => 11,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
         ]);

         DB::table('clientes')->insert([
            'nombre' => 'Cliente 4',
            'correo' => 'correo4@correo.com',
            'password' => '12345678',
            'telefono' => 675454232,
            'user_id' => 12,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
         ]);

         DB::table('clientes')->insert([
            'nombre' => 'Cliente 5',
            'correo' => 'correo5@correo.com',
            'password' => '12345678',
            'telefono' => 675454234,
            'user_id' => 13,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
         ]);
    }
}
