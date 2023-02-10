<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dependentes;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'email',
        'telefone',
    ];

    public function dependentesCount()
    {
        
        return $this->hasMany(Dependentes::class);
    }


    public function dependentes()
    {
        $dependentes = Dependentes::select('dependentes.nome', 'dependentes.nascimento', 'parentescos.nome as parentesco')->join('parentescos', 'parentescos.id', '=', 'dependentes.parentesco_id')->get();
        
        return $dependentes;
    }
}
