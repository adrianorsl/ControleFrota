<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armas extends Model
{
    use HasFactory;

    protected $fillable = ['numero'];

    public function tipoArma()
    {
        return $this->belongsTo('App\Models\TipoArma');
    }

    public function armas_ocorrencias_municoes()
    {
        return $this->belongsToMany(Armas::class);
    }


}
