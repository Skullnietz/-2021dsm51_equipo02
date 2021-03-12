<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudio_Medico extends Model
{
    protected $table = 'estudios_medicos';
    protected $fillable = [
        'estudio',
        'costo',
        'img'
    ];
    use HasFactory;
}
