<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Filiere;
use App\Models\Groupe;
use App\Models\Module;
use App\Models\Semestre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('user.etudiant.list', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $data['filiere'] = Filiere::all()->toArray();
        $data['groupe'] = Groupe::all()->toArray();
        $data['semestre'] = Semestre::all()->toArray();
        $data['module'] = Module::all()->toArray();
        
        return view('user.etudiant.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validationData = $request->validate(Etudiant::validationRules());

        $validationData['password'] = Hash::make($validationData['password']);
        $user = new User();
        // This will get all the fillable fields from the user model (the shared fields) -- Note: getFillable() is a Laravel method.
        $shared_fields = $user->getFillable();
        // Get the shared fields
        $shared_fields_data = array_intersect_key($validationData, array_flip($shared_fields));///user
        // Get the extra fields with the model_name
        $extra_fields_data = array_diff_key($validationData, array_flip($shared_fields));/// model
        
        Etudiant::create($shared_fields_data, $extra_fields_data);

        unset($validationData['password']);
        $etudiant = $validationData;

        return view('user.etudiant.profil', compact('etudiant'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        //
    }

    public function seanceList()
    {
        $etudiant = Auth::user()->userable;
        $seances_data = $etudiant->seances;
        return view('user.etudiant.seances', compact('seances_data'));
    }




}
