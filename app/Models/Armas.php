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

    public function ocorrencias()
    {
        return $this->belongsToMany('App\Models\Ocorrencia', 'armas_ocor_municoes');
                   
                                    
    }
    public function municoes()
    {
        return $this->belongsToMany('App\Models\Municoes', 'armas_ocor_municoes');
                       
    }

    public function veiculo()
    {
        return $this->belongsToMany('App\Models\Veiculo', 'armas_has_veiculos');
                       
    }


}
