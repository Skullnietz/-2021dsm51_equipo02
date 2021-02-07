<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspecialidadesMedicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('especialidades_medicas')->insert([
            ['especialidad' => 'Anestesia y Medicina Intensiva']
            ,['especialidad' => 'Infectologia']
            ,['especialidad' => 'Medicina de Urgencias']
            ,['especialidad' => 'Medicina General Preventiva']
            ,['especialidad' => 'Medicina Interna ']
            ,['especialidad' => 'Neurologia']
            ,['especialidad' => 'Pediatria']
            ,['especialidad' => 'Cardiologia']
            ,['especialidad' => 'Endocrinologia']
            ,['especialidad' => 'Gastroenterologia']
            ,['especialidad' => 'Hematologia']
            ,['especialidad' => 'Inmunologia Clínica']
            ,['especialidad' => 'Farmacologia Clinica']
            ,['especialidad' => ' Bioquímica Clínica ']

        ]);
    }
}
