<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armas_has_veiculo extends Model
{
    use HasFactory;

    protected $fillable = ['armas_id', 'veiculo_id'];
}
