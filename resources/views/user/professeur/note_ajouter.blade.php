@extends('layouts.app')

@section('content')
<div class="card uper">
  <div class="card-header">
    Ajouter note
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
      <form method="post" action="{{ route('create.ajouter.note', $data['etudiant']->user['id']) }}">
          <div class="form-group">
              @csrf
              <label for="name">Nom:</label>
              <input type="text" class="form-control" name="name" value="{{ $data['etudiant']->user['name'] }}" disabled/>
          </div>
          <div class="form-group">
              <label for="price">Prenom</label>
              <input type="text" class="form-control" value="{{ $data['etudiant']->user['prenom'] }}" disabled/>
          </div>
          <div class="form-group">
              <label for="quantity">CNE:</label>
              <input type="text" class="form-control" value="{{ $data['etudiant']->cne }}" disabled/>
          </div>
          <div class="form-group">
              <label for="quantity">Note:</label>
              <input name="note" type="number" class="form-control"/>
          </div>
          <button type="submit" class="btn btn-primary my-5">Ajouter note</button>
      </form>
  </div>
</div>
@endsection