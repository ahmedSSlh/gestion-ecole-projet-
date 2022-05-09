@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{Auth::user()->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::user()->userable->getRole()['role_code'] == 'etudiant')
                        <b>{{Auth::user()->userable->getRole()['role_name']}}</b> inscrit le {{Auth::user()->userable->date_inscription}}
                    @else
                        <b>{{Auth::user()->userable->getRole()['role_name']}}</b> affecter le {{Auth::user()->userable->date_affectation}}
                    @endif
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
