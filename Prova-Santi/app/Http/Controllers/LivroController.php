<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivroRequest;
use App\Http\Resources\LivroResource;
use App\Http\Resources\ReviewResource;
use App\Models\Livro;
use App\Services\LivroService;

class LivroController extends Controller
{
    public function listar(LivroService $service)
    {
        return LivroResource::collection($service->listar());
    }

    public function buscar($id, LivroService $service)
    {
        return new LivroResource($service->buscar($id));
    }

    public function criar(LivroRequest $request)
    {
        $livro = Livro::create($request->validated());
        return new LivroResource($livro);
    }

    public function atualizar(LivroRequest $request, $id)
    {
        $livro = Livro::findOrFail($id);
        $livro->update($request->validated());
        return new LivroResource($livro);
    }

    public function deletar($id, LivroService $service)
    {
        $service->deletar($id);
        return response()->noContent();
    }

    public function reviews($id, LivroService $service)
    {
        return ReviewResource::collection($service->getReviews($id));
    }

    public function detalhes(LivroService $service)
    {
        return LivroResource::collection($service->detalhes());
    }
}
