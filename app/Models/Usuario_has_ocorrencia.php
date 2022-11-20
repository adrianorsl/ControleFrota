<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario_has_ocorrencia extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id', 'ocorrencia_id'];
}
