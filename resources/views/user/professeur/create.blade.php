<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="card uper">
  <div class="card-header">
    Creation d'un professeur
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('professeur.store.form') }}">
          <div class="form-group">
              @csrf
              <label for="name">Nom:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="price">Prenom</label>
              <input type="text" class="form-control" value="" name="prenom"/>
          </div>
          <div class="form-group">
              <label for="quantity">CIN:</label>
              <input type="text" class="form-control" value="" name="cin"/>
          </div>
          <div class="form-group">
              <label for="quantity">Date affectation:</label>
              <input type="datetime-local" class="form-control" value="" name="date_affectation"/>
          </div>
          <div class="form-group">
            <label for="quantity">Email:</label>
            <input type="text" class="form-control" value="" name="email"/>
          </div>
          <div class="form-group">
            <label for="quantity">Mot de pass:</label>
            <input type="password" class="form-control" value="" name="password"/>
          </div>
          <div class="form-group">
            <label for="quantity">Telephone:</label>
            <input type="text" class="form-control" value="" name="telephone"/>
          </div>
          <button type="submit" class="btn btn-primary my-5">Enregistrer</button>
      </form>
  </div>
</div>
@endsection