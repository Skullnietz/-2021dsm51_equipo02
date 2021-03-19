<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarProductosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'producto'=>'required|min:2|max:30',
            'costo' => 'required',
            'existencias' => 'required',
            'categoria' => 'required|min:2|max:90',
            'descripcion' => 'required'
        ];
    }
}
