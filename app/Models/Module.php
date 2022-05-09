<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function semestre()
    {
        return $this->belongsTo(Semestre::class);
    }

    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class);
    }

    public function elementModules()
    {
        return $this->hasMany(ElementModules::class);
    }

}
