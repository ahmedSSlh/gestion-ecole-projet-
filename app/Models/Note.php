<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function etudiant()
    {
        return $this->hasMany(Etudiant::class);
    }

    public function elementModule()
    {
        return $this->belongsTo(ElementModule::class);
    }

    public function professeur()
    {
        return $this->belongsTo(Professeur::class);
    }
}
