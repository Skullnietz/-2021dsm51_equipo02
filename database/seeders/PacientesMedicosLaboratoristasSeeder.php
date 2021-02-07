<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacientesMedicosLaboratoristasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes_medicos_laboratoristas')->insert([
            ['nombre'=>'Yosniel' ,'primer_apellido'=>'Abalos' ,'segundo_apellido'=>'Berastegui' ,'edad'=>'34', 'fecha_nacimiento'=>'1987-07-01' ,'sexo'=>'Masculino' ,'perfil'=>'Medico' ,'correo_electronico'=> 'Yosniel@gmail.com', 'contraseña'=>'shildlenta']
            ,['nombre'=>'Dione' ,'primer_apellido'=>'Abaunza' ,'segundo_apellido'=>'Arganzua' ,'edad'=>'47', 'fecha_nacimiento'=>'1974-11-08' ,'sexo'=>'Indefinido' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Dione@gmail.com', 'contraseña'=>'catterbors']
            ,['nombre'=>'Sayana' ,'primer_apellido'=>'Abraldez' ,'segundo_apellido'=>'Cospedal' ,'edad'=>'39', 'fecha_nacimiento'=>'1982-11-02' ,'sexo'=>'Femenino' ,'perfil'=>'Medico' ,'correo_electronico'=> 'Sayana@gmail.com', 'contraseña'=>'epawdefree']
            ,['nombre'=>'Nair' ,'primer_apellido'=>'Abrea' ,'segundo_apellido'=>'Caso' ,'edad'=>'11', 'fecha_nacimiento'=>'2010-10-06' ,'sexo'=>'Femenino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Nair@gmail.com', 'contraseña'=>'ktruerfult']
            ,['nombre'=>'Nora' ,'primer_apellido'=>'Acebo' ,'segundo_apellido'=>'Astulez' ,'edad'=>'14', 'fecha_nacimiento'=>'2007-09-05' ,'sexo'=>'Femenino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Nora@gmail.com', 'contraseña'=>'ridgambarf']
            ,['nombre'=>'Aloida' ,'primer_apellido'=>'Achaque' ,'segundo_apellido'=>'Cribell' ,'edad'=>'22', 'fecha_nacimiento'=>'199-03-05' ,'sexo'=>'Femenino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Aloida@gmail.com', 'contraseña'=>'rmoushervi']
            ,['nombre'=>'Celeste' ,'primer_apellido'=>'Achiaga' ,'segundo_apellido'=>'Cid' ,'edad'=>'54', 'fecha_nacimiento'=>'1967-02-01' ,'sexo'=>'Femenino' ,'perfil'=>'Medico' ,'correo_electronico'=> 'Celeste@gmail.com', 'contraseña'=>'omerageneg']
            ,['nombre'=>'Camila' ,'primer_apellido'=>'Agreda' ,'segundo_apellido'=>'Hordoñez' ,'edad'=>'24', 'fecha_nacimiento'=>'1997-04-12' ,'sexo'=>'Femenino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Camila@gmail.com', 'contraseña'=>'guellettec']
            ,['nombre'=>'Belén' ,'primer_apellido'=>'Aguiriano' ,'segundo_apellido'=>'Ogero' ,'edad'=>'25', 'fecha_nacimiento'=>'1996-04-05' ,'sexo'=>'Femenino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Belén@gmail.com', 'contraseña'=>'mpledocapt']
            ,['nombre'=>'Jordana' ,'primer_apellido'=>'Aguirol' ,'segundo_apellido'=>'Entrena' ,'edad'=>'17', 'fecha_nacimiento'=>'2004-11-11' ,'sexo'=>'Femenino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Jordana@gmail.com', 'contraseña'=>'leyneneste']
            ,['nombre'=>'Lucia' ,'primer_apellido'=>'Ahelle' ,'segundo_apellido'=>'Nurueña' ,'edad'=>'32', 'fecha_nacimiento'=>'1989-07-08' ,'sexo'=>'Femenino' ,'perfil'=>'Laboratorista' ,'correo_electronico'=> 'Lucia@gmail.com', 'contraseña'=>'roptundine']
            ,['nombre'=>'Nalé' ,'primer_apellido'=>'Albo' ,'segundo_apellido'=>'Bachiller' ,'edad'=>'34', 'fecha_nacimiento'=>'1987-04-02' ,'sexo'=>'Indefinido' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Nalé@gmail.com', 'contraseña'=>'mpantenigu']
            ,['nombre'=>'Feliciano' ,'primer_apellido'=>'Albuerne' ,'segundo_apellido'=>'Recemill' ,'edad'=>'23', 'fecha_nacimiento'=>'1998-10-09' ,'sexo'=>'Masculino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Feliciano@gmail.com', 'contraseña'=>'nteekineli']
            ,['nombre'=>'Xulio' ,'primer_apellido'=>'Alcalde' ,'segundo_apellido'=>'Cardeña' ,'edad'=>'47', 'fecha_nacimiento'=>'1974-09-10' ,'sexo'=>'Masculino' ,'perfil'=>'Medico' ,'correo_electronico'=> 'Xulio@gmail.com', 'contraseña'=>'latualanit']
            ,['nombre'=>'Beatriz' ,'primer_apellido'=>'Alceda' ,'segundo_apellido'=>'Villalon' ,'edad'=>'19', 'fecha_nacimiento'=>'2002-01-12' ,'sexo'=>'Femenino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Beatriz@gmail.com', 'contraseña'=>'leranistle']
            ,['nombre'=>'Ayame' ,'primer_apellido'=>'Alcocer' ,'segundo_apellido'=>'Rubiano' ,'edad'=>'48', 'fecha_nacimiento'=>'1973-02-11' ,'sexo'=>'Femenino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Ayame@gmail.com', 'contraseña'=>'ltonamenly']
            ,['nombre'=>'Aureliano' ,'primer_apellido'=>'Alfonso' ,'segundo_apellido'=>'Vedeja' ,'edad'=>'32', 'fecha_nacimiento'=>'1989-05-10' ,'sexo'=>'Masculino' ,'perfil'=>'Medico' ,'correo_electronico'=> 'Aureliano@gmail.com', 'contraseña'=>'mpleamberf']
            ,['nombre'=>'Fuensanta' ,'primer_apellido'=>'Almendras' ,'segundo_apellido'=>'Antoñana' ,'edad'=>'41', 'fecha_nacimiento'=>'1980-01-10' ,'sexo'=>'Femenino' ,'perfil'=>'Medico' ,'correo_electronico'=> 'Fuensanta@gmail.com', 'contraseña'=>'armakentea']
            ,['nombre'=>'Maite' ,'primer_apellido'=>'Altares' ,'segundo_apellido'=>'Aostri' ,'edad'=>'31', 'fecha_nacimiento'=>'1990-07-07' ,'sexo'=>'Femenino' ,'perfil'=>'Laboratorista' ,'correo_electronico'=> 'Maite@gmail.com', 'contraseña'=>'ncenteripp']
            ,['nombre'=>'Madai' ,'primer_apellido'=>'Alvarez' ,'segundo_apellido'=>'Somiedo' ,'edad'=>'18', 'fecha_nacimiento'=>'2003-10-10' ,'sexo'=>'Femenino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Madai@gmail.com', 'contraseña'=>'hancygotic']
            ,['nombre'=>'Ibire' ,'primer_apellido'=>'Alvaro' ,'segundo_apellido'=>'Roberto' ,'edad'=>'25', 'fecha_nacimiento'=>'1984-05-05' ,'sexo'=>'Femenino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Ibire@gmail.com', 'contraseña'=>'galemencti']
            ,['nombre'=>'David' ,'primer_apellido'=>'Amigo' ,'segundo_apellido'=>'Bernabe' ,'edad'=>'21', 'fecha_nacimiento'=>'1998-01-07' ,'sexo'=>'Masculino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'David@gmail.com', 'contraseña'=>'tmousellig']
            ,['nombre'=>'Kenia' ,'primer_apellido'=>'Amilburu' ,'segundo_apellido'=>'Reyo' ,'edad'=>'52', 'fecha_nacimiento'=>'1982-09-10' ,'sexo'=>'Femenino' ,'perfil'=>'Medico' ,'correo_electronico'=> 'Kenia@gmail.com', 'contraseña'=>'allyoducto']
            ,['nombre'=>'Xavier' ,'primer_apellido'=>'Amocia' ,'segundo_apellido'=>'Sobaler' ,'edad'=>'5', 'fecha_nacimiento'=>'1976-04-03' ,'sexo'=>'Masculino' ,'perfil'=>'Laboratorista' ,'correo_electronico'=> 'Xavier@gmail.com', 'contraseña'=>'cendlemant']
            ,['nombre'=>'Noé' ,'primer_apellido'=>'Ampudia' ,'segundo_apellido'=>'Varas' ,'edad'=>'49', 'fecha_nacimiento'=>'1998-04-05' ,'sexo'=>'Masculino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Noé@gmail.com', 'contraseña'=>'ulloissero']
            ,['nombre'=>'Farah' ,'primer_apellido'=>'Amurrio' ,'segundo_apellido'=>'Abraldez' ,'edad'=>'17', 'fecha_nacimiento'=>'2003-11-12' ,'sexo'=>'Indefinido' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Farah@gmail.com', 'contraseña'=>'itiefulpic']
            ,['nombre'=>'Helga' ,'primer_apellido'=>'Anda' ,'segundo_apellido'=>'Saludes' ,'edad'=>'35', 'fecha_nacimiento'=>'1996-03-02' ,'sexo'=>'Femenino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Helga@gmail.com', 'contraseña'=>'neyelfialp']
            ,['nombre'=>'Pharailda' ,'primer_apellido'=>'Andrino' ,'segundo_apellido'=>'Pescatori' ,'edad'=>'31', 'fecha_nacimiento'=>'2000-10-10' ,'sexo'=>'Femenino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Pharailda@gmail.com', 'contraseña'=>'eckyouskyo']
            ,['nombre'=>'Abian' ,'primer_apellido'=>'Andrino' ,'segundo_apellido'=>'Usarralde' ,'edad'=>'43', 'fecha_nacimiento'=>'1969-01-11' ,'sexo'=>'Indefinido' ,'perfil'=>'Laboratorista' ,'correo_electronico'=> 'Abian@gmail.com', 'contraseña'=>'irentleate']
            ,['nombre'=>'Jean' ,'primer_apellido'=>'Angosto' ,'segundo_apellido'=>'Sandino' ,'edad'=>'33', 'fecha_nacimiento'=>'2016-02-07' ,'sexo'=>'Masculino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Jean@gmail.com', 'contraseña'=>'cumantelan']
            ,['nombre'=>'Xochitl' ,'primer_apellido'=>'Anguciana' ,'segundo_apellido'=>'Roales' ,'edad'=>'14', 'fecha_nacimiento'=>'1972-08-07' ,'sexo'=>'Femenino' ,'perfil'=>'Laboratorista' ,'correo_electronico'=> 'Xochitl@gmail.com', 'contraseña'=>'oldneprive']
            ,['nombre'=>'Lara' ,'primer_apellido'=>'Aniego' ,'segundo_apellido'=>'Llama' ,'edad'=>'16', 'fecha_nacimiento'=>'2004-03-06' ,'sexo'=>'Femenino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Lara@gmail.com', 'contraseña'=>'andlommans']
            ,['nombre'=>'Denya' ,'primer_apellido'=>'Antoñano' ,'segundo_apellido'=>'Marful' ,'edad'=>'42', 'fecha_nacimiento'=>'1986-06-12' ,'sexo'=>'Femenino' ,'perfil'=>'Medico' ,'correo_electronico'=> 'Denya@gmail.com', 'contraseña'=>'aboasoever']
            ,['nombre'=>'Vinicio' ,'primer_apellido'=>'Aragon' ,'segundo_apellido'=>'Mondragon' ,'edad'=>'6', 'fecha_nacimiento'=>'1990-06-09' ,'sexo'=>'Masculino' ,'perfil'=>'Laboratorista' ,'correo_electronico'=> 'Vinicio@gmail.com', 'contraseña'=>'egogimerma']
            ,['nombre'=>'Bárbara' ,'primer_apellido'=>'Aranguren' ,'segundo_apellido'=>'Mañueco' ,'edad'=>'38', 'fecha_nacimiento'=>'1978-10-11' ,'sexo'=>'Masculino' ,'perfil'=>'Medico' ,'correo_electronico'=> 'Bárbara@gmail.com', 'contraseña'=>'allerhorit']
            ,['nombre'=>'Jerson' ,'primer_apellido'=>'Arenchen' ,'segundo_apellido'=>'Caspe' ,'edad'=>'13', 'fecha_nacimiento'=>'1988-02-07' ,'sexo'=>'Masculino' ,'perfil'=>'Laboratorista' ,'correo_electronico'=> 'Jerson@gmail.com', 'contraseña'=>'foculogorr']
            ,['nombre'=>'William' ,'primer_apellido'=>'Ares' ,'segundo_apellido'=>'Macua' ,'edad'=>'34', 'fecha_nacimiento'=>'1988-11-10' ,'sexo'=>'Femenino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'William@gmail.com', 'contraseña'=>'menueferon']
            ,['nombre'=>'Vera' ,'primer_apellido'=>'Ariste' ,'segundo_apellido'=>'Amada' ,'edad'=>'16', 'fecha_nacimiento'=>'2005-06-07' ,'sexo'=>'Femenino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Vera@gmail.com', 'contraseña'=>'largiblent']
            ,['nombre'=>'Estanislao' ,'primer_apellido'=>'Arrateguibel' ,'segundo_apellido'=>'Casuso' ,'edad'=>'52', 'fecha_nacimiento'=>'1979-10-01' ,'sexo'=>'Masculino' ,'perfil'=>'Medico' ,'correo_electronico'=> 'Estanislao@gmail.com', 'contraseña'=>'edievictun']
            ,['nombre'=>'Hilda' ,'primer_apellido'=>'Arriano' ,'segundo_apellido'=>'Benero' ,'edad'=>'25', 'fecha_nacimiento'=>'2015-05-07' ,'sexo'=>'Femenino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Hilda@gmail.com', 'contraseña'=>'wilandangr']
            ,['nombre'=>'Vladimir' ,'primer_apellido'=>'Arrueta' ,'segundo_apellido'=>'Lasalde' ,'edad'=>'31', 'fecha_nacimiento'=>'1983-07-10' ,'sexo'=>'Masculino' ,'perfil'=>'Medico' ,'correo_electronico'=> 'Vladimir@gmail.com', 'contraseña'=>'erandishau']
            ,['nombre'=>'Olivia' ,'primer_apellido'=>'Arteaga' ,'segundo_apellido'=>'Dobale' ,'edad'=>'48', 'fecha_nacimiento'=>'2008-11-11' ,'sexo'=>'Femenino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Olivia@gmail.com', 'contraseña'=>'uresymussi']
            ,['nombre'=>'Ilona' ,'primer_apellido'=>'Artealde' ,'segundo_apellido'=>'Agosta' ,'edad'=>'3', 'fecha_nacimiento'=>'2019-01-01' ,'sexo'=>'Femenino' ,'perfil'=>'Paciente' ,'correo_electronico'=> 'Ilona@gmail.com', 'contraseña'=>'fulewdyeto']

        ]);
    }
}
