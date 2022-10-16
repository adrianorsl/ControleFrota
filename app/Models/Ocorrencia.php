<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocorrencia extends Model
{
    use HasFactory;

    protected $fillable = ['dataInicio', 'dataFim'];

    public function carrocheck()
    {
        return $this->hasOne('App\Models\Carrocheck');
    }

    public function veiculo()
    {
        return $this->belongsTo('App\Models\Veiculo');
    }

    public function armas()
    {
        return $this->belongsToMany('App\Models\Armas','armas_ocor_municoes');
                    
                                    
    }
    public function municoes()
    {
        return $this->belongsToMany('App\Models\Municoes','armas_ocor_municoes');                            
    }

    public function usuario()
    {
        return $this->belongsToMany('App\Models\Usuario','usuario_has_ocorrencias');
    }
    

}
