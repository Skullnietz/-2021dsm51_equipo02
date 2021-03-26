<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now('America/Mexico_City')->format('Y-m-d H:i:s');
        DB::table("productos")->insert([
            [
                'producto' => 'Puerta Automatica'
                , 'costo' => '1800'
                , 'img' => 'puertaautomatica.png'
                , 'descripcion' => 'Esta puerta inteligente se puede activar via Ethernet, el usuario desde la aplicacion puede activarla (el dispositivo necesita estar conectado a internet) '
                , 'categoria' => 'Dispositivo'
                , 'existencias' => '2'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'producto' => 'Alumbrado exterior'
                , 'costo' => '600'
                , 'img' => 'alumbradoexterior.png'
                , 'descripcion' => 'Este dispositivo realiza el encendido y apagado del alumbrado exterior con fotoresistores placa Ethernet Shield. (el dispositivo necesita estar conectado a internet) '
                , 'categoria' => 'Dispositivo'
                , 'existencias' => '3'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'producto' => 'Control de Luces Hogar'
                , 'costo' => '900'
                , 'img' => 'controlluces.png'
                , 'descripcion' => 'Este dispositivo realiza el encendido y apagado de una red de luces con la placa Ethernet Shield. (el dispositivo necesita estar conectado a internet) '
                , 'categoria' => 'Dispositivo'
                , 'existencias' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now

            ],
            [
                'producto' => 'Termometro Ambiental'
                , 'costo' => '580'
                , 'img' => 'termometroambiental.png'
                , 'descripcion' => 'Este dispositivo monitorea la temperatura y humedad del hogar. '
                , 'categoria' => 'Dispositivo'
                , 'existencias' => '9'
                , 'created_at' => $now
                , 'updated_at' => $now

            ],
            [
                'producto' => 'Cochera automatica'
                , 'costo' => '1580'
                , 'img' => 'cocheraautomatica.png'
                , 'descripcion' => 'Este dispositivo abre y cierra la cochera. (el dispositivo necesita estar conectado a internet) '
                , 'categoria' => 'Dispositivo'
                , 'existencias' => '3'
                , 'created_at' => $now
                , 'updated_at' => $now

            ],
            [
                'producto' => 'Sistema de alarma'
                , 'costo' => '990'
                , 'img' => 'sistemaalarma.png'
                , 'descripcion' => 'Este dispositivo viene con sensores antirobo, con un sensor ultrasonico. '
                , 'categoria' => 'Dispositivo'
                , 'existencias' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now

            ],
        ]);
    }
}
