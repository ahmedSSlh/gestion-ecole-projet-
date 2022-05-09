<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function etudiants()
    {
        return $this->hasMany(Etudiant::class);
    }
}
