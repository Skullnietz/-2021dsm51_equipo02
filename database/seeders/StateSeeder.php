<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now('America/Mexico_City')->format('Y-m-d H:i:s');
        DB::table("states")->insert([
            [
                'name' => 'Aguascalientes'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Baja California'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Baja California Sur'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Campeche'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Coahuila de Zaragoza'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Colima'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Chiapas'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Chihuahua'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Distrito Federal'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Durango'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Guerrero'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Guanajuato'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Hidalgo'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Jalisco'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'México'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Michoacán de Ocampo'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Morelos'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Nayarit'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Oaxaca'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Puebla'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Querétaro'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Quintana Roo'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'San Luis Potosí'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Sinaloa'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Sonora'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tabasco'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tamaulipas'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tlaxcala'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Veracruz'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Yucatán'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Zacatecas'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            ]);
    }
}
