<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElementModule extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function seances()
    {
        return $this->hasMany(Seance::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function professeurs()
    {
        return $this->hasMany(Professeurs::class);
    }
    

}
