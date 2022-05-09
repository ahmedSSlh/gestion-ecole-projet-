<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Seance <b>{{ $data['seance']->elementModule->nom_module }}</b></h4>
    <h6>le {{ $data['seance']->date }}</h6>
  </div>
</div>
<br>
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
<form action="{{route('add.etudiants.seance')}}" method="post" id="addEtudiantForm">
  @csrf
  <input type="hidden" name="seance_id" value="{{$data['seance']->id}}">
  <button type="submit" class="btn btn-success my-5">Ajouter/Modifier</button>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">CIN</th>
      <th scope="col">Telephone</th>
      <th scope="col">Email</th>
      <th scope="col">Selectionner</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($data['etudiants'] as $etudiant)
    <tr>
      <th scope="row">*</th>
      <td>{{$etudiant->user['name']}}</td>
      <td>{{$etudiant->user['prenom']}}</td>
      <td>{{$etudiant->user['cin']}}</td>
      <td>{{$etudiant->user['telephone']}}</td>
      <td>{{$etudiant->user['email']}}</td>
      <td>
        <input type="checkbox" name="etudiants[]" value="{{$etudiant['id']}}" form="addEtudiantForm" {{ in_array($etudiant['id'], $data['in_seance']) ? "checked" : "" }}>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection