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
    </tr>
  </thead>
  <tbody>
  @foreach ($seances_data as $seance)
    <tr>
      <th scope="row">1</th>
      <td>{{$seance->elementModule->nom_module}}</td>
      <td>{{$seance->date}}</td>
      <td>{{$seance->heur_debut}}</td>
      <td>{{$seance->heur_fin}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection