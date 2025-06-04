<?php

namespace App\Services;

use App\Repositories\ReviewRepository;

class ReviewService
{
    public function __construct(protected ReviewRepository $repository) {}

    public function listar()
    {
        return $this->repository->listar();
    }

    public function criar(array $dados)
    {
        return $this->repository->create($dados);
    }

    public function buscar($id)
    {
        return $this->repository->buscar($id);
    }

    public function deletar($id)
    {
        return $this->repository->deletar($id);
    }
}
