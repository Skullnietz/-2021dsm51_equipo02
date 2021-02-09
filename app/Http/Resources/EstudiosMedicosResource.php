<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EstudiosMedicosResource extends JsonResource
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
            'estudio'=>$this->estudio,
            'costo'=>$this->costo,

        ];
    } 
}
