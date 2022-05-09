<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class);
    }


    public function elementModule()
    {
        return $this->belongsTo(ElementModule::class);
    }

    public static function validationRules()
    {
        return [
            'element_module_id' => 'required',
            'date' => 'required',
            'heur_debut' => 'required',
            'heur_fin' => 'required',
        ];

    }
}
