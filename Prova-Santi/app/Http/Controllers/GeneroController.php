<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;
use App\Http\Resources\GeneroResource;
use App\Http\Resources\LivroResource;

class GeneroController extends Controller
{
    public function listar()
    {
        return GeneroResource::collection(Genero::all());
    }

    public function buscar($id)
    {
        return new GeneroResource(Genero::findOrFail($id));
    }

    public function criar(Request $request)
    {
        $genero = Genero::create($request->validate(['nome' => 'required|string|max:255']));
        return new GeneroResource($genero);
    }

    public function atualizar(Request $request, $id)
    {
        $genero = Genero::findOrFail($id);
        $genero->update($request->validate(['nome' => 'required|string|max:255']));
        return new GeneroResource($genero);
    }

    public function deletar($id)
    {
        Genero::destroy($id);
        return response()->noContent();
    }

    public function livros($id)
    {
        $genero = Genero::findOrFail($id);
        return LivroResource::collection($genero->livros);
    }

    public function pertencegen()
    {
        return GeneroResource::collection(Genero::with('livros')->get());
    }
}
