<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">List Etudiants</h4>
  </div>
  <form class="form-inline my-2 my-lg-0" type="GET" action="{{ url('/search')}}">
    <input class="from-control mr-sm-2" name="cin" type="Recherche" placeholder="Recherche" aria-label="Recherche etudiant">
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
      <th scope="col">Date inscription</th>
      <th scope="col">Groupe</th>
      <th scope="col">Filiere</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($etudiants as $etudiant)
    <tr>
      <th scope="row">*</th>
      <td>{{$etudiant->user['name']}}</td>
      <td>{{$etudiant->user['prenom']}}</td>
      <td>{{$etudiant->user['cin']}}</td>
      <td>{{$etudiant->user['telephone']}}</td>
      <td>{{$etudiant->user['email']}}</td>
      <td>{{$etudiant->date_inscription}}</td>
      <td>{{$etudiant->groupe->libelle}}</td>
      <td>{{$etudiant->filiere->libelle}}</td>
      <td>
        <div>
        <form action="{{ route('user.delete', $etudiant->user['id']) }}" method="POST">
          @csrf
          @method('delete')
          <button type="submit" class="btn"><img src="{{asset('images/icons/supprimer.png')}}"  alt="Supprimer" style="width: 20px;"/></button>
      </form>
      <a href="{{ route('user.edit',$etudiant->user['id'])}}" class="btn"><img src="{{asset('images/icons/editer.png')}}"  alt="Modifier" style="width: 20px;"/></a>
    </div>
      {{-- <form action="{{ route('user.edit', $etudiant->user['id']) }}" method="POST">
        @csrf
        @method('post')
        <button type="submit" class="btn btn-outline-primary">update</button>
    </form> --}}
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection