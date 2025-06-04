<?php

namespace App\Repositories;

use App\Models\Autor;

class AutorRepository
{
    public function listar()
    {
        return Autor::all();
    }

    public function buscar($id)
    {
        return Autor::findOrFail($id);
    }

    public function deletar($id)
    {
        return Autor::destroy($id);
    }

    public function livros($id)
    {
        return Autor::findOrFail($id)->livros;
    }

    public function comLivros()
    {
        return Autor::with('livros')->get();
    }
}
