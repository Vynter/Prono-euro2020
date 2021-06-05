<?php

namespace App\Models;

use App\Models\Matche;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeMatche extends Model
{
    use HasFactory;

    public function matches()
    {
        $this->hasMany(Matche::class);
    }
}