@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 profil">
            <div class="image">
                <div class="row">
                    @foreach ($user->profile as $item)
                    <div class="col-md-6 text-center">
                        <img src="{{asset('storage/'.$item->tof)}}" class="rounded-circle" width="150px">
                    </div>
                    @endforeach
                    <div class="col-md-6">
                        <div class="info">
                            <h3> {{ $user->username }}</h3>
                            @foreach ($user->profile as $item)
                                <div class="titre">{{ $item->titre }}</div>
                                <div class="statut">{{ $item->statut }}</div>
                                <div class="url"><a href="#">{{ $item->url }}</a></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="abonement text-center">
                <span class="poste"><strong>12</strong> postes</span>
                <span class="abonne"><strong>10</strong> abonné</span>
                <span class="abonnement"><strong>2</strong> abonnement</span>
            </div>
            @foreach ($user->profile as $item)
                <div class="modifier text-center mt-3">
                   @if (Auth::user()->username == $user->username)
                    <a href="{{'/profil/'.$item->id.'/edit'}}" class="btn btn-outline-dark">Modifier profil</a>  
                   @endif
                </div>
            @endforeach
        </div>
    </div>
    <div class="row mt-5">
        @foreach ($user->postes as $item)
            <div class="col-md-3">
                <img src="{{asset('storage/'.$item->image)}}" class="w-100">
            </div>
        @endforeach
    </div>
</div>
@endsection
