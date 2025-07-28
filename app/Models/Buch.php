<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Buch extends Model
{
    use HasFactory;

    protected $table = 'buchs'; // <-- Tabellenname manuell festlegen

    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }

}
