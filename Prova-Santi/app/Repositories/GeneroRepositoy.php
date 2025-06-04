<?php

namespace App\Repositories;

use App\Models\Genero;

class GeneroRepository
{
    public function listar()
    {
        return Genero::all();
    }

    public function buscar($id)
    {
        return Genero::findOrFail($id);
    }

    public function deletar($id)
    {
        return Genero::destroy($id);
    }

    public function livros($id)
    {
        return Genero::findOrFail($id)->livros;
    }

    public function comLivros()
    {
        return Genero::with('livros')->get();
    }
}
