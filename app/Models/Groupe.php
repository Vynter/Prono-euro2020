<?php

namespace App\Models;

use App\Models\Equipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Groupe extends Model
{
    use HasFactory;
    //protected $guarded = [];

    public function equipes()
    {
        return $this->hasMany(Equipe::class);
    }

    public function matches()
    {
        return $this->hasMany(Matche::class);
    }
}