<?php

namespace App\Repositories;

use App\Models\Usuario;

class UsuarioRepository
{
    public function listar()
    {
        return Usuario::all();
    }

    public function buscar($id)
    {
        return Usuario::findOrFail($id);
    }

    public function deletar($id)
    {
        return Usuario::destroy($id);
    }

    public function getReviews($id)
    {
        return Usuario::findOrFail($id)->reviews;
    }
}
