<?php

namespace Database\Seeders;

use App\Models\Filiere;
use Illuminate\Database\Seeder;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Filiere::create([
            'libelle' => 'Science'
        ]);

        Filiere::create([
            'libelle' => 'Art'
        ]);

        Filiere::create([
            'libelle' => 'Litterature'
        ]);
    }
}
