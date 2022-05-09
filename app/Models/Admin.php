<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Personne
{
    use HasFactory;

    public function __construct(array $attributes = array())
    {   
        parent::__construct($attributes);
        $this->setRole('Administrateur', 'admin');
    }

    public static function validationRules()
    {

        return parent::personneValidationRules();
    }
}
