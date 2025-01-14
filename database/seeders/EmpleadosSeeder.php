<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            [
                'name'=>'',
                'a_paterno'=>'',
                'a_materno'=>'',
                'departamento'=>'',
                'carrera'=>'',
                'campus'=>'',
                'email'=>'',
                'email_verified_at'=>'',
                'telefono'=>'',
                'password'=> bcrypt('prueba321'), 
            ],
            [
                'name'=>'',
                'a_paterno'=>'',
                'a_materno'=>'',
                'departamento'=>'',
                'carrera'=>'',
                'campus'=>'',
                'email'=>'',
                'email_verified_at'=>'',
                'telefono'=>'',
                'password'=> bcrypt('prueba321'),
            ],           
        ]);
    }
}
