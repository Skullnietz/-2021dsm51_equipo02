<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria'
        , 'unidad_medida'
        , 'costo'
        , 'existencias'
        , 'producto' 
        , 'descripcion'
        , 'img'
    ];

    public static function reglas() {
        return [
            'categoria' => 'required|in:' . implode(',', self::getOpcionesCategoria())
            , 'costo' => 'required|numeric|min:0'
            , 'existencias' => 'required|integer|min:1'
            , 'producto' => 'required|string|max:100'
            , 'descripcion' => 'required|string|max:200'
            , 'img' => 'required|string|max:100'
        ];
    }

    public static function etiquetas() {
        return [
            'categoria' => 'categoría'
            , 'costo' => 'precio unitario'
            , 'existencias' => 'existencias'
            , 'producto' => 'producto'
            , 'descripcion' => 'descripción'
            , 'img' => 'fotografía'
        ];
    }

    public static function getOpcionesCategoria() {
        return [
            'Dispositivo' => 'Dispositivo'
            , 'Componente' => 'Componente'
            , 'Paquete' => 'Paquete'
        ];
    }



    // public static function generaImagen() {
    //     $categorias = [
    //         'animals'
    //         , 'arch'
    //         , 'nature'
    //         , 'people'
    //         , 'tech'
    //         , 'grayscale'
    //         , 'sepia'
    //     ];
    //     shuffle($categorias);
    //     return 'https://placeimg.com/100/100/' . $categorias[0];
    // }
}
