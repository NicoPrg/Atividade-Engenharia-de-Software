<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Http\Resources\UsuarioResource;
use App\Http\Resources\ReviewResource;

class UsuarioController extends Controller
{
    public function listar()
    {
        return UsuarioResource::collection(Usuario::all());
    }

    public function buscar($id)
    {
        return new UsuarioResource(Usuario::findOrFail($id));
    }

    public function criar(Request $request)
    {
        $usuario = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'senha' => 'required|string|min:6',
        ]);

        return new UsuarioResource($usuario);
    }

    public function atualizar(Request $request, $id)
    {
        $dados = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email,' . $id,
            'senha' => 'nullable|string|min:6',
        ]);

        $usuario = Usuario::findOrFail($id);
        $usuario->update($dados);
        return new UsuarioResource($usuario);
    }

    public function destroy($id)
    {
        Usuario::destroy($id);
        return response()->noContent();
    }

    public function reviews($id)
    {
        $usuario = Usuario::findOrFail($id);
        return ReviewResource::collection($usuario->reviews);
    }
}
