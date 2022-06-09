@extends('layouts.app')

@section('content')
<div class="card uper">
  <div class="card-header">
    Modifier professeur
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
    {{$professeur}}
      <form method="post" action="{{ route('user.update', $professeur->user['id']) }}">
          <div class="form-group">
              @csrf
              <label for="name">Nom:</label>
              <input type="text" class="form-control" name="name" value="{{ $professeur->user['name'] }}"/>
          </div>
          <div class="form-group">
              <label for="price">Prenom</label>
              <input type="text" class="form-control" value="{{ $professeur->user['prenom'] }}"name="prenom"/>
          </div>
          <div class="form-group">
              <label for="quantity">CIN:</label>
              <input type="text" class="form-control" value="{{ $professeur->user['cin'] }}"name="cin"/>
          </div>
          <div class="form-group">
              <label for="quantity">Date affectation:</label>
              <input type="datetime-local" class="form-control" value="{{ $professeur->date_affectation }}"name="date_affectation"/>
          </div>
          <div class="form-group">
            <label for="quantity">Email:</label>
            <input type="text" class="form-control" value="{{ $professeur->user['email'] }}"name="email"/>
          </div>
          <div class="form-group">
            <label for="quantity">Telephone:</label>
            <input type="text" class="form-control" value="{{ $professeur->user['telephone'] }}"name="telephone"/>
          </div>
          <div class="form-group">
            <label for="filiere">Element Module:</label>
          <select name="element_module_id" class="form-select" aria-label="Selectioner Element module">
              <option selected>Selectioner Element Module</option>
              @foreach ($elementModule as $element_module)
                  <option value="{{$element_module->id }}" {{ $element_module->id == $professeur->element_module_id ? 'selected' : '' }}>{{$element_module->nom_module }}</option>
              @endforeach
          </select>
        </div>
          <button type="submit" class="btn btn-primary my-5">Update</button>
      </form>
  </div>
</div>
@endsection