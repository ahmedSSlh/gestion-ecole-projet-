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
                'name' => 'MAHMOUDI',
                'prenom' => 'ABDELHAK',
                'cin' => 'AP0101',
                "telephone" => "0601010101",
                'email' => 'mahmoudi@admin.com',
                'password' => Hash::make('123456789')
            ],
            [
                'element_module_id' => 1
            ]
        );

        Professeur::create(
            [
                'name' => 'RAHMOUNI',
                'prenom' => 'Mohamed',
                'cin' => 'A1001',
                "telephone" => "0601010101",
                'email' => 'rahmouni@gmail.com',
                'password' => Hash::make('123456789')
            ],
            [
                'element_module_id' => 2
            ]
        );

        Professeur::create(
            [
                'name' => 'BRAHIM',
                'prenom' => 'LAMHARCHI',
                'cin' => 'A01010',
                "telephone" => "0601010101",
                'email' => 'lamharchi@gmail.com',
                'password' => Hash::make('123456789')
            ],
            [
                'element_module_id' => 3
            ]
        );
    }
}
