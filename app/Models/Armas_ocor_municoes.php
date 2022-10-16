<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armas_ocor_municoes extends Model
{
    use HasFactory;

    protected $fillable = ['armas_id', 'ocorrencia_id', 'municoes_id'];

    
}
