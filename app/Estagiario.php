<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estagiario extends Model
{
    protected $fillable = [
        'titulo', 'descricao', 'valor','imagem', 'publicado'
    ];
}
