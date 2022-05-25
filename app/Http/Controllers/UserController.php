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

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user_code = $user->userable->getRole()['role_code'];
        

        $userable = $user->userable;


        if($user_code == "etudiant")
        {
            $etudiant = $userable;
            $data['etudiant'] = $etudiant;
            $data['filiere'] = Filiere::all()->toArray();
            $data['groupe'] = Groupe::all()->toArray();
            $data['semestre'] = Semestre::all()->toArray();
            $data['module'] = Module::all()->toArray();
            
            return view('user.etudiant.update', compact('data'));
        }

        $professeur = $userable;
        return view('user.professeur.update', compact('professeur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validationData = $request->validate($user->userable_type::validationRules($user));
        $_user = new User();
        // This will get all the fillable fields from the user model (the shared fields) -- Note: getFillable() is a Laravel method.
        $shared_fields = $_user->getFillable();
        // Get the shared fields
        $shared_fields_data = array_intersect_key($validationData, array_flip($shared_fields));///user
        // Get the extra fields with the model_name
        $extra_fields_data = array_diff_key($validationData, array_flip($shared_fields));/// model
        

        if($user->userable->update($extra_fields_data)){
            $user->update($shared_fields_data);
        }
        

        $etudiant = $validationData;
        
        $etudiants = Etudiant::all();
        return view('user.etudiant.list', compact('etudiants'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user_type = $user->userable->getRole()['role_name'];
        $user->userable->delete();
        $user->delete();
        return redirect()->back()->with('success',$user_type .' supprimer');
    }

    public function search()
    {
        $cin = trim($_GET['cin']);
        $user = User::where('cin', $cin)->first();

        if($user == null) return view('user.not_found');


        $user_code = $user->userable->getRole()['role_code'];
        

        $userable = [$user->userable];


        if($user_code == "etudiant")
        {
            $etudiants = $userable;
            return view('user.etudiant.list', compact('etudiants'));
        }

        $professeurs = $userable;
        return view('user.professeur.list', compact('professeurs'));

    }


}
