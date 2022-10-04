<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TecnicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tecnicos')->insert([
            'nombre' => 'Tecnico 1',
            'domicilio' => 'Domicilio 1',
            'imagen' => 'FeUnR2DuMAO3Z5dke0jvflBX8axPtGjCBAjkkkYL.jpg',
            'user_id' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
         ]);
 
         DB::table('tecnicos')->insert([
             'nombre' => 'Tecnico 2',
             'domicilio' =>'Domicilio 2',
             'imagen' => 'FeUnR2DuMAO3Z5dke0jvflBX8axPtGjCBAjkkkYL.jpg',
             'user_id' => 5,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s')
          ]);
 
          DB::table('tecnicos')->insert([
             'nombre' => 'Tecnico 3',
             'domicilio' => 'Domicilio 3',
             'imagen' => 'FeUnR2DuMAO3Z5dke0jvflBX8axPtGjCBAjkkkYL.jpg',
             'user_id' => 6,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s')
          ]);
 
          DB::table('tecnicos')->insert([
             'nombre' => 'Tecnico  4',
             'domicilio' => 'Domicilio 4',
             'imagen' =>'FeUnR2DuMAO3Z5dke0jvflBX8axPtGjCBAjkkkYL.jpg',
             'user_id' => 7,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s')
          ]);
 
          DB::table('tecnicos')->insert([
             'nombre' => 'Tecnico 5',
             'domicilio' => 'Domicilio 5',
             'imagen' => 'FeUnR2DuMAO3Z5dke0jvflBX8axPtGjCBAjkkkYL.jpg',
             'user_id' => 8,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s')
          ]);

          DB::table('tecnicos')->insert([
            'nombre' => 'Usuario Tecnico',
           'domicilio' =>'Domicilio del Tecnico',
           'imagen' => 'FeUnR2DuMAO3Z5dke0jvflBX8axPtGjCBAjkkkYL.jpg',
           'user_id' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
         ]);
    }
}
