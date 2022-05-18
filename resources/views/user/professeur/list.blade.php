<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">List Professeur</h4>
  </div>
  <form class="form-inline my-2 my-lg-0" type="GET" action="{{ url('/search')}}">
    <input class="from-control mr-sm-2" name="cin" type="Recherche" placeholder="Recherche" aria-label="Recherche professeur">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Recherche</button>
  </form>
</div>
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">CIN</th>
      <th scope="col">Telephone</th>
      <th scope="col">Email</th>
      <th scope="col">Date affectation</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($professeurs as $professeur)
    <tr>
      <th scope="row">*</th>
      <td>{{$professeur->user['name']}}</td>
      <td>{{$professeur->user['prenom']}}</td>
      <td>{{$professeur->user['cin']}}</td>
      <td>{{$professeur->user['telephone']}}</td>
      <td>{{$professeur->user['email']}}</td>
      <td>{{$professeur->date_affectation}}</td>
      <td>
        <form action="{{ route('user.delete', $professeur->user['id']) }}" method="POST">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-outline-danger">Delete</button>
      </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection