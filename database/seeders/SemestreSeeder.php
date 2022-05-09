<?php

namespace Database\Seeders;

use App\Models\Semestre;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SemestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Semestre::create([
            'libelle' => 'ANNEE 2021-2022',
            'annee_scolaire' => Carbon::now()
        ]);
    }
}
