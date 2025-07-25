<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Autor extends Model
{
    use HasFactory;

    public function buch()
    {
        return $this->hasMany(Buch::class);
        
    }
}
