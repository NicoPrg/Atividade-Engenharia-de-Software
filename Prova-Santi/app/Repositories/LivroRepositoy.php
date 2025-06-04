<?php

namespace App\Repositories;

use App\Models\Livro;

class LivroRepository
{
    public function listar()
    {
        return Livro::all();
    }

    public function buscar($id)
    {
        return Livro::findOrFail($id);
    }

    public function deletar($id)
    {
        return Livro::destroy($id);
    }

    public function getReviews($livroId)
    {
        return Livro::findOrFail($livroId)->reviews;
    }

    public function detalhes()
    {
        return Livro::with(['autor', 'genero', 'reviews'])->get();
    }
}
