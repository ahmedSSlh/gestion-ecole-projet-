<?php

namespace Database\Seeders;

use App\Models\ElementModule;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(FiliereSeeder::class);
        $this->call(GroupeSeeder::class);
        $this->call(ModuleSeeder::class);
        $this->call(SemestreSeeder::class);
        $this->call(ElementModuleSeeder::class);
        $this->call(ProfesseurSeeder::class);
        $this->call(EtudiantSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
