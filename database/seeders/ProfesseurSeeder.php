<?php

namespace Database\Seeders;

use App\Models\Professeur;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProfesseurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Professeur::create(
            [
                'name' => 'Ali',
                'prenom' => 'Amin',
                'cin' => 'AP45871',
                "telephone" => "0612325232",
                'email' => 'ali@amin.com',
                'password' => Hash::make('123456789')
            ],
            [
                'date_affectation' => Carbon::now()
            ]
        );

        Professeur::create(
            [
                'name' => 'RAHMOUNI',
                'prenom' => 'Mohamed',
                'cin' => 'A1234',
                "telephone" => "0612325232",
                'email' => 'rahmouni@gmail.com',
                'password' => Hash::make('123456789')
            ],
            [
                'date_affectation' => Carbon::now()
            ]
        );

        Professeur::create(
            [
                'name' => 'BRAHIM',
                'prenom' => 'LAMHARCHI',
                'cin' => 'A32632',
                "telephone" => "0612325232",
                'email' => 'lamharchi@gmail.com',
                'password' => Hash::make('123456789')
            ],
            [
                'date_affectation' => Carbon::now()
            ]
        );
        Professeur::create(
            [
                'name' => 'BARKIA',
                'prenom' => 'HASSAN',
                'cin' => 'A14212',
                "telephone" => "0612325232",
                'email' => 'barkia@gmail.com',
                'password' => Hash::make('123456789')
            ],
            [
                'date_affectation' => Carbon::now()
            ]
        );
    }
}
