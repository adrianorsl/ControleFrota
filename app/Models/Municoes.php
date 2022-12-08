<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municoes extends Model
{
    use HasFactory;

    protected $fillable = ['quantidade', 'tipoMunicoes_id'];

    public function tipoMunicao()
    {
        return $this->belongsTo('App\Models\TipoMunicao');
    }

    public function armas()
    {
        return $this->belongsToMany('App\Models\Armas','armas_ocor_municoes');
               
                                    
    }
    public function ocorrencias()
    {
        return $this->belongsToMany('App\Models\Ocorrencias','armas_ocor_municoes');
                         
    }
}
