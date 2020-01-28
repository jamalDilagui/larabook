@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit profil</div>
                <div class="card-body">
                    <form method="POST" action="{{'/addProfil'}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="titre" class="col-md-4 col-form-label text-md-right">{{ __('titre') }}</label>

                            <div class="col-md-6">
                            <input id="titre" type="text" class="form-control" name="titre" value="{{ old('titre')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="statut" class="col-md-4 col-form-label text-md-right">{{ __('statut') }}</label>

                            <div class="col-md-6">
                                <textarea id="statut" type="text" class="form-control" name="statut">
                                {{ old('statut')}}
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tof" class="col-md-4 col-form-label text-md-right">{{ __('photo') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control" name="tof" value="{{ old('tof') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label text-md-right">{{ __('url') }}</label>

                            <div class="col-md-6">
                                <input id="url" type="text" class="form-control" value=" {{ old('url') }}" name="url">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    add profil
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
