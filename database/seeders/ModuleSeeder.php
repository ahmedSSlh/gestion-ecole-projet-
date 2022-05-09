<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Module::create([
            'nom_module' => 'Math et informatique',
            'libelle' => 'Math - Info'
        ]);

        Module::create([
            'nom_module' => 'Physique et Biologie',
            'libelle' => 'PH - BIO'
        ]);

        Module::create([
            'nom_module' => 'litterature et francaise',
            'libelle' => 'LT - FR'
        ]);

        Module::create([
            'nom_module' => 'litterature et Anglaise',
            'libelle' => 'LT - EN'
        ]);
    }
}
