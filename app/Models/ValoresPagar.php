<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValoresPagar extends Model
{
    protected $table = 'valores_pagar';
    use HasFactory;

    public function cliente(){
        return $this->hasOne(Cliente::class, 'id');
    }
}
