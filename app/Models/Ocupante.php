<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocupante extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'email', 'endereco', 'telefone', 'cidade', 'estado', 'cep', 'consumo', 'mesa_id'];


    public function mesa(){
        return $this->belongsTo(Mesa::class);
    }
}
