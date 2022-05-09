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
                'email' => 'ali@amin.com',
                'password' => Hash::make('123456789')
            ],
            [
                'date_affectation' => Carbon::now()
            ]
        );
    }
}
