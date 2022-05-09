<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="card uper">
  <div class="card-header">
    Creation d'un seance
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
      <form method="post" action="{{ route('seance.store.form') }}">
          <div class="form-group">
            @csrf
            <label for="filiere">Element module:</label>
            <select name="element_module_id" class="form-select" aria-label="Selectioner semestre">
                <option selected>Selectioner Semestre</option>
                @foreach ($data['elementModule'] as $elementModule)
                    <option value="{{$elementModule['id']}}">{{$elementModule['nom_module']}}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
              <label for="quantity">Date:</label>
              <input type="datetime-local" class="form-control" value="" name="date"/>
          </div>
          <div class="form-group">
            <label for="quantity">Heur debut:</label>
            <input type="text" class="form-control" value="" name="heur_debut"/>
          </div>
          <div class="form-group">
            <label for="quantity">Heur fin:</label>
            <input type="text" class="form-control" value="" name="heur_fin"/>
          </div>
          <button type="submit" class="btn btn-primary my-5">Enregistrer</button>
      </form>
  </div>
</div>
@endsection