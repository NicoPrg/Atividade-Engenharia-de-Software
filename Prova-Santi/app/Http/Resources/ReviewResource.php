<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nota' => $this->nota,
            'comentario' => $this->comentario,
            'livro' => new LivroResource($this->whenLoaded('livro')),
            'usuario' => new UsuarioResource($this->whenLoaded('usuario')),
        ];
    }
}
