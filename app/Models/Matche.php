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
        return  $this->hasMany(Pronostic::class);
    }
    /*
    public function typeMatche()
    {
        $this->belongsTo(TypeMatche::class);
    }
    public function equipes()
    {
        return $this->belongsToMany(Equipe::class);
    }*/
    public function equipesDs()
    {
        return $this->belongsTo(Equipe::class, 'equipeD_id', 'id');
    }

    public function equipesEs()
    {
        return $this->belongsTo(Equipe::class, 'equipeE_id', 'id');
    }
}