<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">List Seances</h4>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Element module</th>
      <th scope="col">Date</th>
      <th scope="col">Heur debut</th>
      <th scope="col">Heur fin</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($seances_data as $seance)
    <tr>
      <th scope="row">1</th>
      <td>{{$seance['element_module_name']}}</td>
      <td>{{$seance['date']}}</td>
      <td>{{$seance['heur_debut']}}</td>
      <td>{{$seance['heur_fin']}}</td>
      <th scope="col">
        <a href="{{ route('create.add.etudiants.seance', ['seance' => $seance['id']]) }}">Ajouter Etudiants</a>
      </th>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection