<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    protected $fillable = ['livro_id', 'usuario_id', 'comentario', 'nota'];

    public function livro() {
        return $this->belongsTo(Livro::class);
    }

    public function usuario() {
        return $this->belongsTo(Usuario::class);
    }
}
