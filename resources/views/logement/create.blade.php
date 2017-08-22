@extends('layouts.main')

@section('subnav')
    <nav class="level">
        <!-- Left side -->
        <div class="level-left">
            <div class="level-item">
                <p class="subtitle is-5 is-uppercase">
                    <strong>Logements</strong>
                </p>
            </div>
        </div>

        <!-- Right side -->
        <div class="level-right">
            <p class="level-item">
                <a href="{{ route('logement.index') }}" class="button is-success">
                    <span class="icon"><i class="fa fa-arrow-left"></i></span>
                    <span>Retour</span>
                </a>
            </p>
        </div>
        </div>
    </nav>
@endsection

@section('content')
    <div class="container m-t-100">
        <div class="columns">
            <div class="column is-5 is-offset-4">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Ajouter un logement
                        </p>
                    </header>
                    <form method="POST" action="{{ route('logement.store') }}">
                        {{ csrf_field() }}
                        <div class="card-content">
                            <div class="content">
                                <div class="columns is-multiline">
                                    <div class="column is-half">
                                        <div class="field">
                                            <label class="label">Nom</label>
                                            <div class="control">
                                                <input class="input{{ $errors->has('name') ? ' is-danger' : '' }}" type="text" placeholder="Nom du logement"
                                                       value="{{ old('name') }}" name="name">
                                            </div>
                                            @if ($errors->has('name'))
                                                <p class="help is-danger">{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="column is-half">
                                        <div class="field">
                                            <label class="label">Superficie (en mètre carré)</label>
                                            <div class="control">
                                                <input class="input{{ $errors->has('superficie') ? ' is-danger' : '' }}" type="number" placeholder="00"
                                                       value="{{ old('superficie') }}" name="superficie">
                                            </div>
                                            @if ($errors->has('superficie'))
                                                <p class="help is-danger">{{ $errors->first('superficie') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="column is-half">
                                        <div class="field">
                                            <label class="label">Commune</label>
                                            <div class="control">
                                                <div class="select">
                                                    <select name="commune_id">
                                                        <option value="0">Sélectionner la commune</option>
                                                        @foreach($communes as $commune)
                                                            <option value="{{ $commune->id }}">{{ $commune->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            @if ($errors->has('name'))
                                                <p class="help is-danger">{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="column is-half">
                                        <div class="field">
                                            <label class="label">Type de logement</label>
                                            <div class="control">
                                                <div class="select">
                                                    <select name="commune_id">
                                                        <option value="0">Sélectionner le type de logement</option>
                                                        @foreach($typeLogements as $typeLogement)
                                                            <option value="{{ $typeLogement->id }}">{{ $typeLogement->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            @if ($errors->has('name'))
                                                <p class="help is-danger">{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <footer class="card-footer">
                            <div class="card-footer-item control is-pulled-right">
                                <button class="button is-primary">Enrgistrer</button>
                            </div>
                        </footer>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection