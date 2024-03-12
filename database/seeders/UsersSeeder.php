<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'rol_id'=>1,
            'name'=>'sau12',
            'usu_nombres'=>'Saul',
            'usu_telefono'=>'46546655',
            'email'=>'twins@gmail.com',
            'password'=>bcrypt('654321')
        ]);

        DB::table('users')->insert([
            'rol_id'=>2,
            'name'=>'David',
            'usu_nombres'=>'david',
            'usu_telefono'=>'65464',
            'email'=>'daviiid@gmail.com',
            'password'=>bcrypt('123456')
        ]);

        DB::table('users')->insert([
            'rol_id'=>3,
            'name'=>'Israel',
            'usu_nombres'=>'Israel',
            'usu_telefono'=>'098243256',
            'email'=>'israel@gmail.com',
            'password'=>bcrypt('isra123')
        ]);
 
    }
}
