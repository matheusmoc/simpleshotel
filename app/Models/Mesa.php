<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;
    protected $fillable = ['consumo'];

    public function ocupantes(){
        return $this->hasMany(Ocupante::class);
    }

}
