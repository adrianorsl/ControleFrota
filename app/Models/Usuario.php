<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['nome','user','pass','cargo_id'];
    

    public function cargo()
    {
        return $this->belongsTo('App\Models\Cargo');
    }

    public function ocorrencias()
    {
        return $this->belongsToMany('App\Models\Ocorrencia','usuario_has_ocorrencias');
    }
}

