<?php

namespace App\Services;

use App\Repositories\AutorRepository;

class AutorService
{
    public function __construct(protected AutorRepository $repository) {}

    public function listar()
    {
        return $this->repository->listar();
    }

    public function buscar($id)
    {
        return $this->repository->buscar($id);
    }

    public function livros($id)
    {
        return $this->repository->livros($id);
    }

    public function comLivros()
    {
        return $this->repository->comLivros();
    }

    public function deletar($id)
    {
        return $this->repository->deletar($id);
    }
}
