<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;

    public function ocupante(){
        return $this->belongsTo(Mesa::class, 'mesa_id', 'id');
    }
}
