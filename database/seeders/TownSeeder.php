<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $now = Carbon::now('America/Mexico_City')->format('Y-m-d H:i:s');
        DB::table("towns")->insert([
            [
                'name' => 'Aguascalientes'
                , 'state_id' => '1'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Asientos'
                , 'state_id' => '1'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Calvillo'
                , 'state_id' => '1'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Cosío'
                , 'state_id' => '1'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Jesús María'
                , 'state_id' => '1'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Pabellón de Arteaga'
                , 'state_id' => '1'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Rincón de Romos'
                , 'state_id' => '1'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'San José de Gracia'
                , 'state_id' => '1'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tepezalá'
                , 'state_id' => '1'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'El Llano'
                , 'state_id' => '1'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'San Francisco de los Romo'
                , 'state_id' => '1'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ensenada'
                , 'state_id' => '2'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Mexicali'
                , 'state_id' => '2'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tecate'
                , 'state_id' => '2'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tijuana'
                , 'state_id' => '2'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Playas de Rosarito'
                , 'state_id' => '2'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Comondú'
                , 'state_id' => '3'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Mulegé'
                , 'state_id' => '3'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'La Paz'
                , 'state_id' => '3'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Los Cabos'
                , 'state_id' => '3'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Loreto'
                , 'state_id' => '3'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Calkiní'
                , 'state_id' => '4'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Campeche'
                , 'state_id' => '4'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Carmen'
                , 'state_id' => '4'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Champotón'
                , 'state_id' => '4'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Hecelchakán'
                , 'state_id' => '4'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Hopelchén'
                , 'state_id' => '4'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Palizada'
                , 'state_id' => '4'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tenabo'
                , 'state_id' => '4'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Escárcega'
                , 'state_id' => '4'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Calakmul'
                , 'state_id' => '4'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Candelaria'
                , 'state_id' => '4'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Abasolo'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Acuña'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Allende'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Arteaga'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Candela'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Castaños'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Cuatro Ciénegas'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Escobedo'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Francisco I. Madero'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Frontera'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'General Cepeda'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Guerrero'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Hidalgo'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Jiménez'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Juárez'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Lamadrid'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Matamoros'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Monclova'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Morelos'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Múzquiz'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Nadadores'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Nava'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ocampo'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Parras'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Piedras Negras'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Progreso'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ramos Arizpe'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Sabinas'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Sacramento'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Abasolo'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Saltillo'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'San Buenaventura'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'San Juan de Sabinas'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'San Pedro'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Sierra Mojada'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Torreón'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Viesca'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Villa Unión'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Zaragoza'
                , 'state_id' => '5'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Abasolo'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Acuña'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Allende'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Arteaga'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Candela'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Castaños'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Cuatro Ciénegas'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Escobedo'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Francisco I. Madero'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Frontera'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'General Cepeda'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Guerrero'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Hidalgo'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Jiménez'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Juárez'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Lamadrid'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Matamoros'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Monclova'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Morelos'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Múzquiz'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Nadadores'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Nava'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ocampo'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Parras'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Piedras Negras'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Progreso'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ramos Arizpe'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Sabinas'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Sacramento'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Saltillo'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'San Buenaventura'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'San Juan de Sabinas'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'San Pedro'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Sierra Mojada'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Torreón'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Viesca'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Villa Unión'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Zaragoza'
                , 'state_id' => '6'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Acacoyagua'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Acala'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Acapetahua'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Altamirano'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Amatán'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Amatenango de la Frontera'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Amatenango del Valle'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Angel Albino Corzo'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Arriaga'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Bejucal de Ocampo'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Bella Vista'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Berriozábal'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Bochil'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'El Bosque'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Cacahoatán'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Catazajá'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Acacoyagua'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Cintalapa'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Coapilla'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Comitán de Domínguez'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'La Concordia'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Copainalá'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Chalchihuitán'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Chamula'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Chanal'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Chapultenango'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Chenalhó'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Chiapa de Corzo'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Chiapilla'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Chicoasén'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Chicomuselo'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Chilón'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Escuintla'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Francisco León'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Frontera Comalapa'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Frontera Hidalgo'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Huehuetán'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Huixtán'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'La Grandeza'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Huitiupán'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'La Independencia'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ixhuatán'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ixtacomitán'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ixtapa'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ixtapangajoya'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Jiquipilas'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Jitotol'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Juárez'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Larráinzar'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'La Libertad'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Mapastepec'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Las Margaritas'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Mazapa de Madero'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Metapa'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Mazatán'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Mitontic'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Acacoyagua'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Motozintla'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Nicolás Ruíz'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ocosingo'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ocotepec'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ocozocoautla de Espinosa'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ostuacán'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Osumacinta'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Oxchuc'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Palenque'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Pantelhó'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Pantepec'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Pichucalco'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Pijijiapan'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'El Porvenir'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Villa Comaltitlán'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Pueblo Nuevo Solistahuacán'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Rayón'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Reforma'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Las Rosas'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Sabanilla'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Salto de Agua'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],

            [
                'name' => 'San Cristóbal de las Casas'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'San Fernando'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Siltepec'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Simojovel'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Sitalá'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Socoltenango'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Solosuchiapa'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Soyaló'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],[
                'name' => 'Suchiapa'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Suchiate'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Sunuapa'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tapachula'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tapalapa'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tapilula'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tecpatán'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tenejapa'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Teopisca'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tila'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tonalá'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Totolapa'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'La Trinitaria'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tumbalá'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tuxtla Gutiérrez'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tuxtla Chico'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tuzantán'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tzimol'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Unión Juárez'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Venustiano Carranza'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Villa Corzo'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Villaflores'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Yajalón'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'San Lucas'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Zinacantán'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'San Juan Cancuc'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Aldama'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Benemérito de las Américas'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Maravilla Tenejapa'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Marqués de Comillas'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Montecristo de Guerrero'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'San Andrés Duraznal'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Santiago el Pinar'
                , 'state_id' => '7'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Acambay de Ruíz Castañeda'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Acolman'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Aculco'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Almoloya de Alquisiras'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Almoloya de Juárez'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Almoloya del Río'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Amanalco'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Amatepec'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Amecameca'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Apaxco'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Atenco'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Atizapán'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Atizapán de Zaragoza'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Atlacomulco'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Atlautla'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Axapusco'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ayapango'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Calimaya'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Capulhuac'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Coacalco de Berriozábal'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Coatepec Harinas'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Cocotitlán'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Coyotepec'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Cuautitlán'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Chalco'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Chapa de Mota'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Chapultepec'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Chiautla'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Chicoloapan'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Chiconcuac'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Chimalhuacán'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Donato Guerra'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ecatepec de Morelos'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ecatzingo'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Huehuetoca'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Hueypoxtla'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Huixquilucan'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Isidro Fabela'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ixtapaluca'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ixtapan de la Sal'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ixtapan del Oro'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ixtlahuaca'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Jalatlaco'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Jaltenco'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Jilotepec'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Jilotzingo'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Jiquipilco'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Jocotitlán'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Joquicingo'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Juchitepec'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Lerma'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Malinalco'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Melchor Ocampo'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Metepec'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],[
                'name' => 'Mexicaltzingo'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Morelos'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Naucalpan de Juárez'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Nezahualcóyotl'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Nextlalpan'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Nicolás Romero'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Nopaltepec'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ocoyoacac'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ocuilan'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'El Oro'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Otumba'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Otzoloapan'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Otzolotepec'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Ozumba'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Papalotla'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'La Paz'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Polotitlán'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Rayón'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'San Antonio la Isla'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'San Felipe del Progreso'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'San Martín de las Pirámides'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'San Mateo Atenco'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'San Simón de Guerrero'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Santo Tomás'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Soyaniquilpan de Juárez'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Sultepec'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tecámac'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tejupilco'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Temamatla'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Temascalapa'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Temascalcingo'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Temascaltepec'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tenancingo'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tenango del Aire'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tenango del Valle'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Teoloyucan'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Teotihuacán'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tepetlaoxtoc'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tepetlixpa'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tepotzotlán'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tequixquiac'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Texcaltitlán'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Texcalyacac'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Texcoco'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tezoyuca'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tianguistenco'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Timilpan'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tlalmanalco'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tlalnepantla de Baz'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tlatlaya'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Toluca'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tonatico'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tultepec'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tultitlán'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Valle de Bravo'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Villa de Allende'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Villa del Carbón'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Villa Guerrero'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Villa Victoria'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Xonacatlán'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Zacazonapan'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Zacualpan'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Zinacantepec'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Zumpahuacán'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Zumpango'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Cuautitlán Izcalli'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Valle de Chalco Solidaridad'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Luvianos'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'San José del Rincón'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ],
            [
                'name' => 'Tonanitla'
                , 'state_id' => '15'
                , 'created_at' => $now
                , 'updated_at' => $now
            ]
            ]);
    }
}
