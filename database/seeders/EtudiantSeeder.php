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
            "name" => "SIGMA",
            "cin" => "AP12358",
            "password" => Hash::make('123456789'),
            "email" => "all@all.com",
            "telephone" => "0610197642"
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
