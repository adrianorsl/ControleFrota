<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municoes extends Model
{
    use HasFactory;

    protected $fillable = ['quantidade'];

    public function tipoMunicao()
    {
        return $this->belongsTo('App\Models\TipoMunicao');
    }

    public function ocorrencias()
    {
        return $this->belongsToMany(Ocorrencia::class);
    }
}
