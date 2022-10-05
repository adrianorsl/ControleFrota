<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armas_ocorrencias_municoes extends Model
{
    use HasFactory;

    protected $fillable = ['armas_id', 'ocorrencias_id', 'municoes_id'];

    
}
