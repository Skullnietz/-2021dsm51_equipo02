<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'primer_apellido',
        'segundo_apellido',
        'fecha_nacimiento' ,
        'sexo',
        'perfil',
        'estatus',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public static function reglas() {
        return [
             'name' => 'required|string|max:50'
             ,'primer_apellido' => 'required|string|max:40'
             ,'segundo_apellido' => 'string|max:40'
            , 'sexo' => 'required|string|max:20'
            , 'perfil' => 'required|string|max:20'
            , 'fecha_nacimiento' => 'required|date'
        ];
    }

    public static function getOpcionesPerfil() {
        return [
            'Cliente' => 'Cliente'
            , 'Administrador' => 'Administrador'
            , 'Empleado' => 'Empleado'
        ];
    }
    public static function getOpcionesSexo() {
        return [
            'Masculino' => 'Masculino'
            , 'Femenino' => 'Femenino'
            , 'Indefinido' => 'Indefinido'
        ];
    }
}
