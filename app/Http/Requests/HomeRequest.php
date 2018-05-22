<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'link' => 'min:1|required',
            'contenido' => 'min:5|required',
            'titulo' => 'required'
        ];

    }
}
