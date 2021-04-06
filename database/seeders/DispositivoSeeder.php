<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DispositivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now('America/Mexico_City')->format('Y-m-d H:i:s');
        DB::table("dispositivos")->insert([
            [
                'Dispositivo' => 'Control luces'
                , 'img' => 'controlluces.png'
               , 'Estado' => 'OFF'
               , 'foco' => 'NO'
               , 'created_at' => $now
               , 'updated_at' => $now
           ],
           [
                'Dispositivo' => 'Habitacion 1'
                , 'img' => 'foco.png'
               , 'Estado' => 'OFF'
               , 'foco' => 'SI'
               , 'created_at' => $now
               , 'updated_at' => $now
           ],
           [
                'Dispositivo' => 'Habitacion 2'
                , 'img' => 'foco.png'
               , 'Estado' => 'OFF'
               , 'foco' => 'SI'
               , 'created_at' => $now
               , 'updated_at' => $now
           ],
           [
                'Dispositivo' => 'Habitacion 3'
                , 'img' => 'foco.png'
               , 'Estado' => 'OFF'
               , 'foco' => 'SI'
               , 'created_at' => $now
               , 'updated_at' => $now
           ],
           [
                'Dispositivo' => 'Habitacion 4'
                , 'img' => 'foco.png'
               , 'Estado' => 'OFF'
               , 'foco' => 'SI'
               , 'created_at' => $now
               , 'updated_at' => $now
           ],
           [
                'Dispositivo' => 'Habitacion 5'
                , 'img' => 'foco.png'
               , 'Estado' => 'OFF'
               , 'foco' => 'SI'
               , 'created_at' => $now
               , 'updated_at' => $now
           ],
           [
                'Dispositivo' => 'Habitacion 6'
                , 'img' => 'foco.png'
               , 'Estado' => 'OFF'
               , 'foco' => 'SI'
               , 'created_at' => $now
               , 'updated_at' => $now
           ],
           [
                'Dispositivo' => 'Puerta Automatica'
                , 'img' => 'puertaautomatica.png'
               , 'Estado' => 'OFF'
               , 'foco' => 'NO'
               , 'created_at' => $now
               , 'updated_at' => $now
           ],
           [
            'Dispositivo' => 'Cochera Automatica'
            , 'img' => 'cocheraautomatica.png'
           , 'Estado' => 'OFF'
           , 'foco' => 'NO'
           , 'created_at' => $now
           , 'updated_at' => $now
           ],
           [
            'Dispositivo' => 'Termometro'
            , 'img' => 'termometro.png'
           , 'Estado' => 'OFF'
           , 'foco' => 'NO'
           , 'created_at' => $now
           , 'updated_at' => $now
           ],
            ]);
    }
}
