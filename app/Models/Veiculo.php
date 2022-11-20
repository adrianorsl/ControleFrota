<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $fillable = ['placa','numero','km'];

    public function ocorrencia()
    {
        return $this->hasMany('App\Models\Ocorrencia');
    }

    public function armas()
    {
        return $this->belongsToMany('App\Models\Armas', 'armas_has_veiculos');
                       
    }
}
