<?php

namespace App\Models;

use App\Models\Equipe;
use App\Models\Pronostic;
use App\Models\TypeMatche;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matche extends Model
{
    use HasFactory;

    public function pronostics()
    {
        $this->hasMany(Pronostic::class);
    }
    /*
    public function typeMatche()
    {
        $this->belongsTo(TypeMatche::class);
    }

    public function equipes()
    {
        $this->belongsToMany(Equipe::class);
    }*/
}