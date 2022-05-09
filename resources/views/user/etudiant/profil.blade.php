<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">{{$etudiant['name']}}</h4>
    <p class="card-text">Etudiant inscrit le {{$etudiant['date_inscription']}}</p>
    <a href="#" class="btn btn-primary">Profil</a>
  </div>
</div>
@endsection