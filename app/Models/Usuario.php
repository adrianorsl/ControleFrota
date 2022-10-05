<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['nome','user','pass'];
    

    public function cargo()
    {
        return $this->belongsTo('App\Models\Cargo');
    }
}

