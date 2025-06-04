<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Http\Resources\ReviewResource;
use App\Services\ReviewService;
use App\Models\Review;


class ReviewController extends Controller
{
    public function listar()
    {
        return ReviewResource::collection(Review::all());
    }

    public function buscar($id)
    {
        return new ReviewResource(Review::findOrFail($id));
    }

    public function criar(ReviewRequest $request, ReviewService $service)
    {
        $dados = $request->validated();

        $review = $service->criar($dados);

        return new ReviewResource($review);
    }

    public function atualizar(ReviewRequest $request, $id)
    {
        $review = Review::findOrFail($id);
        $review->update($request->validated());
        return new ReviewResource($review);
    }

    public function deletar($id)
    {
        Review::destroy($id);
        return response()->noContent();
    }
}
