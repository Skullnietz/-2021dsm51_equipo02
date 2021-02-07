<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EstudiosMedicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estudios_medicos')->insert([
            ['estudio' => 'Quimica Sanguinea 21 ','costo' => '320',]
            ,['estudio' => 'Quimica Sanguinea 3','costo' => '150',]
            ,['estudio' => 'Electrocardiograma','costo' => '200',]
            ,['estudio' => 'Proyeccion Torax','costo' => '550',]
            ,['estudio' => 'Prueba Antigeno','costo' => '1400',]
            ,['estudio' => 'Perfil Hepático','costo' => '600',]
            ,['estudio' => 'Perfil Reumático','costo' => '800',]
            ,['estudio' => 'Perfil Triode','costo' => '1500',]
            ,['estudio' => 'Urinálisis','costo' => '1100',]
            ,['estudio' => 'Proyeccion de Mano','costo' => '720',]
            ,['estudio' => 'Perfil de lipidos','costo' => '840',]
            ,['estudio' => 'Examen General de Orina','costo' => '450',]
            ,['estudio' => 'PCR','costo' => '3300',]
            ,['estudio' => 'Prueba IgG y IgM','costo' => '1200',]
            ,['estudio' => 'Espirometria','costo' => '300',]
            ,['estudio' => 'Glucosa en Sangre','costo' => '250',]
            ,['estudio' => 'Perfil de Drogas x3','costo' => '890',]
            ,['estudio' => 'Bacteriologia','costo' => '705',]
            ,['estudio' => 'Analisis Agua','costo' => '570',]
        ]);
    }
}
