<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Autor extends Model
{
    use HasFactory;

    public function buch()
    {
        return $this->hasMany(Buch::class);

    }

    public function scopeAmBestenAutor(Builder $query): Builder
    {
        return $query->withCount('buch')// zählt die Bücher pro Autor
                    ->orderBy('buch_count', 'desc');// sortiert nach der Anzahl absteigend
    }
}
