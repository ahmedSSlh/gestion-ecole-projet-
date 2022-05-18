<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Professeur;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $professeurs = Professeur::all();
        return view('user.professeur.list', compact('professeurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.professeur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validationData = $request->validate(Professeur::validationRules());
        $validationData['password'] = Hash::make($validationData['password']);
        $user = new User();
        // This will get all the fillable fields from the user model (the shared fields) -- Note: getFillable() is a Laravel method.
        $shared_fields = $user->getFillable();
        // Get the shared fields
        $shared_fields_data = array_intersect_key($validationData, array_flip($shared_fields));
        // Get the extra fields with the model_name
        $extra_fields_data = array_diff_key($validationData, array_flip($shared_fields));
        
        Professeur::create($shared_fields_data, $extra_fields_data);

        unset($validationData['password']);
        $professeur = $validationData;

        return view('user.professeur.profil', compact('professeur'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function show(Professeur $professeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function edit(Professeur $professeur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professeur $professeur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professeur $professeur)
    {
       
    }

    public function createAjouterNote()
    {
        // Note::create($request->all());
    }

    public function ajouterNote(Request $request)
    {
        Note::create($request->all());
    }
}
