<?php

namespace App\Models;

use App\Models\User;
use App\Models\Matche;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pronostic extends Model
{
    use HasFactory;

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function matche()
    {
        $this->belongsTo(Matche::class);
    }
}