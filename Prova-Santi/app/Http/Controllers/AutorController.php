<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;
use App\Http\Resources\AutorResource;
use App\Http\Resources\LivroResource;

class AutorController extends Controller
{
    public function listar()
    {
        return AutorResource::collection(Autor::all());
    }

    public function buscar($id)
    {
        return new AutorResource(Autor::findOrFail($id));
    }

    public function criar(Request $request)
    {
        $dados = $request->validate([
            'nome' => 'required|string|max:255',
            'data_nascimento' => 'nullable|date',
            'biografia' => 'nullable|string',
        ]);

        $autor = Autor::create($dados);
        return new AutorResource($autor);
    }

    public function atualizar(Request $request, $id)
    {
        $dados = $request->validate([
            'nome' => 'required|string|max:255',
            'data_nascimento' => 'nullable|date',
            'biografia' => 'nullable|string',
        ]);

        $autor = Autor::findOrFail($id);
        $autor->update($dados);
        return new AutorResource($autor);
    }

    public function deletar($id)
    {
        Autor::destroy($id);
        return response()->noContent();
    }

    public function livros($id)
    {
        $autor = Autor::findOrFail($id);
        return LivroResource::collection($autor->livros);
    }

    public function pertence()
    {
        return AutorResource::collection(Autor::with('livros')->get());
    }
}
