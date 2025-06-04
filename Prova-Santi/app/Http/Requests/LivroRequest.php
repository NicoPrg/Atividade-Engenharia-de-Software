<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivroRequest extends FormRequest
{
    public function rules()
    {
        return [
            'titulo' => 'required|string|max:255',
            'sinopse' => 'nullable|string',
            'autor_id' => 'required|exists:autores,id',
            'genero_id' => 'nullable|exists:generos,id',
        ];
    }
}
