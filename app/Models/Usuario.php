<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['nome','user','pass','cargo_id'];
    
    protected $hidden = [
        'pass',
    ];
    public function cargo()
    {
        return $this->belongsTo('App\Models\Cargo');
    }

    public function ocorrencias()
    {
        return $this->belongsToMany('App\Models\Ocorrencia','usuario_has_ocorrencias');
    }

    
}

