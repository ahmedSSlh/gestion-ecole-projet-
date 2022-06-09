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
            'libelle' => '
            Licence d’Éducation : Spécialité Enseignement Secondaire – Informatique'
        ]);

        Filiere::create([
            'libelle' => 'Licence d’Éducation  Spécialité Enseignement Secondaire – Langue française'
        ]);

        Filiere::create([
            'libelle' => 'Licence Professionnelle Intitulé de la filière : Langues étrangères appliquées (L.E.A.)'
        ]);
        Filiere::create([
            'libelle' => 'Licence Professionnelle : Licence d’Enseignement des Mathématiques'
        ]);
        Filiere::create([
            'libelle' => 'Licence Professionnelle : CARTOGRAPHIE, GEOLOGIE ET GEOMATIQUE –C2G-'
        ]);
        Filiere::create([
            'libelle' => 'Licence Professionnelle : FILIERE UNIVERSITAIRE DE L’ENSEIGNEMENT EN SCIENCES DE LA VIE ET DE LA TERRE (FUE-SVT)'
        ]);
        Filiere::create([
            'libelle' => 'Licence Professionnelle : Chimie Industrielle – Génie des procédés (CIGP)'
        ]);
        Filiere::create([
            'libelle' => 'Licence Professionnelle d’Enseignement : Technologie des Multimédias et du Web (TMW)'
        ]);
        Filiere::create([
            'libelle' => 'Licence Professionnelle: FILIERE UNIVERSITAIRE DE L’EDUCATION EN SCIENCES DE LA MATIERE PHYSIQUE - CHIMIE'
        ]);
        Filiere::create([
            'libelle' => 'Licence d’Éducation : Spécialité Enseignement Secondaire – Langue anglaise'
        ]);
        Filiere::create([
            'libelle' => 'الإجازة في التربية تخصص التعليم الثانوي الفلسفة'
        ]);
    }
}
