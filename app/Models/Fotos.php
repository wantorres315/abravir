<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotos extends Model
{
    protected $table = 'fotos';
    use HasFactory;
    protected $fillable = ['texto','foto'];
}
