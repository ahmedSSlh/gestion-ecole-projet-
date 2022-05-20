<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="card uper">
  <div class="card-header">
    Creation d'un etudiant
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
      <form method="post" action="{{ route('user.update', $data['etudiant']->user['id']) }}">
          <div class="form-group">
              @csrf
              <label for="name">Nom:</label>
              <input type="text" class="form-control" name="name" value="{{$data['etudiant']->user['name']}}"/>
          </div>
          <div class="form-group">
              <label for="price">Prenom</label>
              <input type="text" class="form-control" value="{{$data['etudiant']->user['prenom']}}" name="prenom"/>
          </div>
          <div class="form-group">
              <label for="quantity">CIN:</label>
              <input type="text" class="form-control" value="{{$data['etudiant']->user['cin']}}" name="cin"/>
          </div>
          <div class="form-group">
              <label for="quantity">CNE:</label>
              <input type="text" class="form-control" value="{{$data['etudiant']->cne}}" name="cne"/>
          </div>
          <div class="form-group">
              <label for="quantity">Date inscription:</label>
              <input type="datetime-local" class="form-control" value="{{$data['etudiant']->date_inscription}}" name="date_inscription"/>
          </div>
          <div class="form-group">
            <label for="quantity">Email:</label>
            <input type="text" class="form-control" value="{{$data['etudiant']->user['email']}}" name="email"/>
          </div>
          <div class="form-group">
            <label for="quantity">Telephone:</label>
            <input type="text" class="form-control" value="{{$data['etudiant']->user['telephone']}}" name="telephone"/>
          </div>
          <div class="form-group">
              <label for="filiere">Filieres:</label>
            <select name="filiere_id" class="form-select" aria-label="Selectioner filiere">
                <option selected>Selectioner filiere</option>
                @foreach ($data['filiere'] as $filiere)
                    <option value="{{$filiere['id']}}">{{$filiere['libelle']}}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="groupe">Groupe:</label>
          <select name="groupe_id" class="form-select" aria-label="Selectioner groupe">
              <option selected>Selectioner Groupe</option>
              @foreach ($data['groupe'] as $groupe)
                  <option value="{{$groupe['id']}}">{{$groupe['libelle']}}</option>
              @endforeach
          </select>
        </div>
        <div class="form-group">
            <label for="filiere">Semestre:</label>
          <select name="semestre_id" class="form-select" aria-label="Selectioner semestre">
              <option selected>Selectioner Semestre</option>
              @foreach ($data['semestre'] as $semestre)
                  <option value="{{$semestre['id']}}">{{$semestre['libelle']}}</option>
              @endforeach
          </select>
        </div>
        <div class="form-group">
            <label for="filiere">Module:</label>
          <select name="module_id" class="form-select" aria-label="Selectioner module">
              <option selected>Selectioner Module</option>
              @foreach ($data['module'] as $module)
                  <option value="{{$module['id']}}">{{$module['nom_module']}} ({{$module['libelle']}})</option>
              @endforeach
          </select>
        </div>
          <button type="submit" class="btn btn-primary my-5">Update</button>
      </form>
  </div>
</div>
@endsection