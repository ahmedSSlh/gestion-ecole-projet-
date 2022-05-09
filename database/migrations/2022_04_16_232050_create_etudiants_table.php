<?php

use App\Models\Filiere;
use App\Models\Groupe;
use App\Models\Module;
use App\Models\Semestre;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Filiere::class);
            $table->foreignIdFor(Groupe::class);
            $table->foreignIdFor(Semestre::class);
            $table->foreignIdFor(Module::class);
            $table->string('cne');
            $table->datetime('date_inscription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
