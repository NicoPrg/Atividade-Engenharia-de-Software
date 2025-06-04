<?php

namespace App\Services;

use App\Repositories\UsuarioRepository;

class UsuarioService
{
    public function __construct(protected UsuarioRepository $repository) {}

    public function listar()
    {
        return $this->repository->listar();
    }

    public function buscar($id)
    {
        return $this->repository->buscar($id);
    }

    public function reviews($id)
    {
        return $this->repository->getReviews($id);
    }

    public function deletar($id)
    {
        return $this->repository->deletar($id);
    }
}
