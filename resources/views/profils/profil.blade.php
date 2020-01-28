@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 profil">
            <div class="image">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img src="{{asset('images/user.png')}}" class="rounded-circle" width="150px">
                    </div>
                    <div class="col-md-6">
                        <div class="info">
                            <h3> {{ Auth::user()->username }}</h3>
                            @foreach ($profils as $profil)
                            <div class="titre">{{$profil->titre}}</div>
                            <div class="statut">{{$profil->statut}}</div>
                            <div class="url"><a href="#">{{$profil->url}}</a></div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="modifier text-center">
                <a href="{{'/profil/'.$profil->id.'/edit'}}" class="btn btn-outline-dark">Modifier profil</a>
                @endforeach
            </div>
            <div class="abonement text-center">
                <span class="poste"><strong>12</strong> postes</span>
                <span class="abonne"><strong>10</strong> abonné</span>
                <span class="abonnement"><strong>2</strong> abonnement</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">

        </div>
    </div>
</div>
@endsection
