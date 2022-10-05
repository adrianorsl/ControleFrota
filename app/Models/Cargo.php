<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $fillable = ['descricao'];
    public function usuarios()
    {
        return $this->hasMany('App\Models\Usuario');
    }
}