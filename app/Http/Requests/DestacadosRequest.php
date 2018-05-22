<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DestacadosRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'descripcion'   => 'min:0|max:500',
            'orden'  => 'required',
            'imagen' => 'required'
        ];
    }
}
