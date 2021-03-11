<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cronograma extends Model
{
    protected $table = 'cronogramas';

    protected $fillable = [
        'nome',
        'area',
        'quantSemanas',
        'quantConteudos',
        'tipo',
        'fim'
    ];
    public function setNomeAttribute($value)
    {
        $this->attributes['nome'] = $value;
    }

    public function semanas()
    {
        return $this->hasMany(Semana::class);
    }

    use HasFactory;
}
