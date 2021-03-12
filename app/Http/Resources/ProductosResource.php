<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductosResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[

            'id'=> $this->id,
            'producto'=>$this->estudio,
            'costo'=>$this->costo,
            'img'=>$this->img,
            'descripcion'=>$this->descripcion,

        ];
    }
}
