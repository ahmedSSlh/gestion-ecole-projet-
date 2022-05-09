<?php

namespace Database\Seeders;

use App\Models\Groupe;
use Illuminate\Database\Seeder;

class GroupeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Groupe::create([
            'libelle' => 'Groupe A'
        ]);

        Groupe::create([
            'libelle' => 'Groupe B'
        ]);

        Groupe::create([
            'libelle' => 'Groupe C'
        ]);

        Groupe::create([
            'libelle' => 'Groupe D'
        ]);
    }
}
