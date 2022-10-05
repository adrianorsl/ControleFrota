<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoArma extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function armas()
    {
        return $this->hasMany('App\Models\Armas');
    }
}
