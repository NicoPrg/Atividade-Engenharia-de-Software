<?php

namespace App\Services;

use App\Repositories\LivroRepository;

class LivroService
{
    public function __construct(protected LivroRepository $repository) {}

    public function listar()
    {
        return $this->repository->listar();
    }

    public function buscar($id)
    {
        return $this->repository->buscar($id);
    }

    public function deletar($id)
    {
        return $this->repository->deletar($id);
    }

    public function getReviews($id)
    {
        return $this->repository->getReviews($id);
    }

    public function detalhes()
    {
        return $this->repository->detalhes();
    }
}
