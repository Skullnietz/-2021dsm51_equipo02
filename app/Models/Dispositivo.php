<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    use HasFactory;
    protected $table = 'dispositivos';
    protected $fillable = ['dispositivo','user_id','Estado'];
}
