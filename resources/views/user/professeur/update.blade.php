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
    {{$professeur}}
      <form method="post" action="{{ route('user.update', $professeur->user['id']) }}">
          <div class="form-group">
              @csrf
              <label for="name">Nom:</label>
              <input type="text" class="form-control" name="name" value="{{ $professeur->user['name'] }}"/>
          </div>
          <div class="form-group">
              <label for="price">Prenom</label>
              <input type="text" class="form-control" value="{{ $professeur->user['prenom'] }}"/>
          </div>
          <div class="form-group">
              <label for="quantity">CIN:</label>
              <input type="text" class="form-control" value="{{ $professeur->user['cin'] }}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Date affectation:</label>
              <input type="datetime-local" class="form-control" value="{{ $professeur->date_affectation }}"/>
          </div>
          <div class="form-group">
            <label for="quantity">Email:</label>
            <input type="text" class="form-control" value="{{ $professeur->user['email'] }}"/>
          </div>
          <div class="form-group">
            <label for="quantity">Telephone:</label>
            <input type="text" class="form-control" value="{{ $professeur->user['telephone'] }}"/>
          </div>
          <button type="submit" class="btn btn-primary my-5">Update</button>
      </form>
  </div>
</div>
@endsection