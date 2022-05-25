<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Personne
{
    use HasFactory;

    protected $fillable = [
        'date_affectation',
        'element_module_id'
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

    public static function validationRules(User $user = null)
    {
        $etudiant_validation = [
            'date_affectation' => 'required',
            'element_module_id' => 'required',
        ];

        return array_merge(parent::personneValidationRules($user), $etudiant_validation);
    }

    public function getDateAffectationAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d\TH:i');
    }

    public function setDateAffectationAttribute()
    {
        $this->date_affectation = Carbon::parse($this->value)->format('Y-m-d H:i:s');
    }
}
