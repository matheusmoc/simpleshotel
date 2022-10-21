<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['imagem','nome_produto', 'preco', 'tipo', 'quantidade'];


    
    public function mesa(){
        return $this->belongsToMany(Mesa::class)->withTimestamps();
    }
}
