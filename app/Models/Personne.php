<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class Personne extends Model
{
    use HasFactory;

    protected $role = [];
    
    
    public function setRole($role_name = "Guest", $role_code = "guest")
    {
        $this->role = [
            'role_name' => $role_name,
            'role_code' => $role_code
        ];
    }

    public function getRole()
    {
        return $this->role;
    }

    //Overriding the create method
    public static function create(array $attributes = [], array $user_extra_attributes = [])
    {
        $model = static::query()->create($user_extra_attributes);
        
        if(!empty($attributes)){
            $model = $model->user()->create($attributes);
        }
        
        
        return $model;
    }

    //Overriding the delete method
    public function delete()
    {
        $res = parent::delete();
        if($res == true)
        {
            if($this->user != null)
            {
                $relation = $this->user; // here get the relation data
                $relation->delete();
            }
        }
    }

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public static function personneValidationRules()
    {
        return [
            'name' => 'required|max:10',
            'prenom' => 'required|max:10',
            'cin' => 'required',
            'password' => 'required',
            'email' => 'required|email|unique:users',
            'telephone' => 'required',
        ];
    }

}
