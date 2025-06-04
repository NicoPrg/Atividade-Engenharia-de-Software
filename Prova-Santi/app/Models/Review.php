<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';

    protected $fillable = ['usuario_id', 'livro_id', 'nota', 'comentario'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function livro()
    {
        return $this->belongsTo(Livro::class);
    }
}
