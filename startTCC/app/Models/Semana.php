<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semana extends Model
{
    protected $table = 'semanas';

    protected $fillable = [
            'conteudos',
        'materias'
    ];


    public function cronograma()
    {
        return $this->belongsTo(Cronograma::class);
    }

    use HasFactory;
}
