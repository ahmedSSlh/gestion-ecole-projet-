<?php

namespace Database\Seeders;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::create(
            [
                'name' => 'Admin Ecole',
                'prenom' => 'Amin',
                'cin' => 'AP45871',
                'email' => 'admin@ecole.com',
                'password' => Hash::make('123456789')
            ],
            []
        );
    }
}
