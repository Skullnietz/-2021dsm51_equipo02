<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;
    protected $table = 'direccions';
    protected $fillable = ['state_id','user_id','town_id','Calle','Indicaciones','CP','Telefono'];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
