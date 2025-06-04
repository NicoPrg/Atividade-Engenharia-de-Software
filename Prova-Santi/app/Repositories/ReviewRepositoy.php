<?php

namespace App\Repositories;

use App\Models\Review;

class ReviewRepository
{
    public function listar()
    {
        return Review::all();
    }

    public function create(array $dados)
    {
        return Review::create($dados);
    }

    public function buscar($id)
    {
        return Review::findOrFail($id);
    }

    public function deletar($id)
    {
        return Review::destroy($id);
    }
}
