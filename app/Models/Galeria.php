<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fotos;

class Galeria extends Model
{
    protected $table = 'galeria';
    use HasFactory;

    public function fotos()
    {
        return $this->hasMany(Fotos::class,'galeria_id');
    }
}
