<?php

namespace App\Http\Controllers;

use App\Models\ElementModule;
use App\Models\Etudiant;
use App\Models\Seance;
use Illuminate\Http\Request;

class SeanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $seances = Seance::all()->toArray();

        $seances_data = array_map(function($value){
            $value['element_module_name'] = ElementModule::find($value['element_module_id'])->nom_module;
            return $value;
        },$seances);

        return view('seance.list', compact('seances_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['elementModule'] = ElementModule::all()->toArray();
        return view('seance.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validationData = $request->validate(Seance::validationRules());
        Seance::create($validationData);


        return redirect()->route('seance.index.form');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function show(Seance $seance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function edit(Seance $seance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seance $seance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seance $seance)
    {
        //
    }

    public function createAddEtudiantSeance(Seance $seance)
    {
        $etudiants = Etudiant::all();
        $data['etudiants'] = $etudiants;
        $data['seance'] = $seance;
        $data['in_seance'] = $seance->etudiants->pluck('id')->toArray();
        return view('seance.etudiants', compact('data'));
    }

    public function addEtudiantSeance(Request $request)
    {
        $seance = Seance::find($request->seance_id);
        $seance->etudiants()->sync($request->etudiants);
        
        return redirect()->route('create.add.etudiants.seance', ['seance' => $request->seance_id])->with('success', 'Opération terminée avec succès');   ;
    }
}
