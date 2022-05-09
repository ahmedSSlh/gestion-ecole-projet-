<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">{{$professeur['name']}}</h4>
    <p class="card-text">Professuer affecter le {{$professeur['date_affectation']}}</p>
    <a href="#" class="btn btn-primary">Profil</a>
  </div>
</div>
@endsection