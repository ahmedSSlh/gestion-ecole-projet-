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
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
      <form method="post" action="{{ route('store.note') }}">
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
          <input type="hidden" name="etudiant_id", value="{{$data['etudiant']->user['id']}}">
          <input type="hidden" name="element_module_id", value="{{$data['element_module_id']}}">
          <input type="hidden" name="professeur_id", value="{{$data['professeur_id']}}">
          <button type="submit" class="btn btn-primary my-5">Ajouter note</button>
      </form>
  </div>
</div>
@endsection