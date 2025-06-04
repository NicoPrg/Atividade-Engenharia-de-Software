<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AutorRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nome' => 'required|string|max:255',
            'data_nascimento' => 'nullable|date',
            'biografia' => 'nullable|string',
        ];
    }
}
