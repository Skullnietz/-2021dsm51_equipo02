<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now('America/Mexico_City')->format('Y-m-d H:i:s');
        DB::table("users")->insert([
            [
                'name' => 'Carlos'
                , 'primer_apellido' => 'Guizar'
                , 'segundo_apellido' => 'Peña'
                , 'fecha_nacimiento' => '2000-01-24'
                , 'sexo' => 'Masculino'
                , 'perfil' => 'Laboratorista'
                , 'estatus' => 'Activo'
                , 'email' => 'carlos.guizarp@gmail.com'
                , 'password' => bcrypt('1234567')
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Jairo'
                , 'primer_apellido' => 'Padilla'
                , 'segundo_apellido' => 'Nava'
                , 'fecha_nacimiento' => '1994-01-25'
                , 'sexo' => 'Masculino'
                , 'perfil' => 'Medico'
                , 'estatus' => 'Activo'
                , 'email' => 'padillanava@gmail.com'
                , 'password' => bcrypt('jairop')
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Aurora'
                , 'primer_apellido' => 'Gonzales'
                , 'segundo_apellido' => 'Hernandez'
                , 'fecha_nacimiento' => '2002-01-12'
                , 'sexo' => 'Masculino'
                , 'perfil' => 'Medico'
                , 'estatus' => 'Activo'
                , 'email' => 'auroguads@gmail.com'
                , 'password' => bcrypt('auroras')
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
        ]);
    }
}
