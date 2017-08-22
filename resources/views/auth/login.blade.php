<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="container m-t-100">
        <div class="columns">
            <div class="column is-5 is-offset-4">
                <div class="m-t-100 card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Connexion
                        </p>
                    </header>
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="card-content">
                            <div class="content">
                                <div class="field">
                                    <label class="label">Adresse électronique</label>
                                    <div class="control">
                                        <input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" type="text" placeholder="name@exemple.com"
                                               value="{{ old('email') }}" name="email">
                                    </div>
                                    @if ($errors->has('email'))
                                        <p class="help is-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>

                                <div class="field">
                                    <label class="label">Mot de passe</label>
                                    <div class="control">
                                        <input class="input{{ $errors->has('password') ? ' is-danger' : '' }}" type="password" name="password" required>
                                    </div>
                                    @if ($errors->has('password'))
                                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>


                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            Se souvenir de moi
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <footer class="card-footer">
                            <div class="card-footer-item control is-pulled-right">
                                <button class="button is-primary">Connexion</button>
                            </div>
                        </footer>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>