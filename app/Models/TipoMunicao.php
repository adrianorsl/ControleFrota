<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMunicao extends Model
{
    use HasFactory;

    protected $fillable = ['descricao'];

    public function armas()
    {
        return $this->hasMany('App\Models\Municoes');
    }
}
