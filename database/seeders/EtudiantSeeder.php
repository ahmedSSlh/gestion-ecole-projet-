<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Etudiant::create([
            "name" => "SALIH",
            'prenom' => 'AHMED',
            "cin" => "A5323",
            "password" => Hash::make('123456789'),
            "email" => "salih@gmail.com",
            "telephone" => "0631167343"
        ], 
        [
            "cne" => "123456",
            "date_inscription" => "2022-04-09T13:05",
            "filiere_id" => "1",
            "groupe_id" => "1",
            "semestre_id" => "1",
            "module_id" => "2"
        ]);

        
    
        Etudiant::create([
            "name" => "HAROCH",
            'prenom' => 'OTHMANE',
            "cin" => "A5252",
            "password" => Hash::make('123456789'),
            "email" => "harouch@gmail.com",
            "telephone" => "0612321252"
        ], 
        [
            "cne" => "123456",
            "date_inscription" => "2022-04-09T13:05",
            "filiere_id" => "1",
            "groupe_id" => "1",
            "semestre_id" => "1",
            "module_id" => "2"
        ]);

        
    
        Etudiant::create([
            "name" => "BAKKAL",
            'prenom' => 'JAMAL',
            "cin" => "A5545",
            "password" => Hash::make('123456789'),
            "email" => "bakkal@gmail.com",
            "telephone" => "0631167343"
        ], 
        [
            "cne" => "123456",
            "date_inscription" => "2022-04-09T13:05",
            "filiere_id" => "1",
            "groupe_id" => "1",
            "semestre_id" => "1",
            "module_id" => "2"
        ]);

        
    
    }


}
