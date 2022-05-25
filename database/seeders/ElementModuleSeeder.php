<?php

namespace Database\Seeders;

use App\Models\ElementModule;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ElementModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ElementModule::create([
           'module_id' => 1,
           'nom_module' => 'SQL'
        ]);

        ElementModule::create([
            'module_id' => 1,
            'nom_module' => 'Web'
        ]);

        ElementModule::create([
            'module_id' => 3,
            'nom_module' => 'Math'
        ]);

        
    }
}
