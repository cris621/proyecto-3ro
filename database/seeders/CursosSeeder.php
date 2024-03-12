<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cursos')->insert(
            ['cur_titulo'=>'Musica',
            'cur_descripcion'=>'Historia de la Musica',
            'cur_grupo'=>'Grupo 2',
            'cur_estado'=>1,
            'created_at'=>date('Y-m-d'),
        ]);

        DB::table('cursos')->insert(
            ['cur_titulo'=>'Deporte',
            'cur_descripcion'=>'Practica con el balon',
            'cur_grupo'=>'Grupo 5',
            'cur_estado'=>1,
            'created_at'=>date('Y-m-d'),
        ]);
        DB::table('cursos')->insert([
            'cur_titulo' => 'Idiomas',
            'cur_descripcion' => 'Significado de palabras en ingles',
            'cur_grupo' => 'Grupo 1',
            'cur_estado' => 1,
            'created_at' => now(),
        ]);
    }
}
