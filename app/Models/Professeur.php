<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Personne
{
    use HasFactory;

    protected $fillable = [
        'date_affectation',
    ];

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
        $this->setRole('Professur', 'professeur');
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function elementModule()
    {
        return $this->belongsTo(ElementModule::class);
    }

    public static function validationRules()
    {
        $etudiant_validation = [
            'date_affectation' => 'required',
        ];

        return array_merge(parent::personneValidationRules(), $etudiant_validation);
    }
}
