@extends('layouts.main')

@section('subnav')
    <!-- Main container -->

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
                <p class="level-item"><a href="{{ route('logement.create') }}" class="button is-success">New</a></p>
            </div>

    </nav>
@endsection

@section('content')
    <div class="columns">
        <div class="column is-two-thirds">
            <div class="card">
                <div class="card-content">
                    <p class="title">
                        “There are two hard things in computer science: cache invalidation, naming things, and off-by-one errors.”
                    </p>
                    <p class="subtitle">
                        Jeff Atwood
                    </p>
                </div>

            </div>
        </div>
        <div class="column">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Commune
                    </p>
                    <commune-form></commune-form>

                </header>
                <div class="card-content">
                    <div class="content">
                        <commune-list></commune-list>
                    </div>
                </div>
            </div>
            <div class="card m-t-50">
                <header class="card-header">
                    <p class="card-header-title">
                        Type de logement
                    </p>
                    <type-logement-form></type-logement-form>
                </header>
                <div class="card-content">
                    <div class="content">
                        <type-logement-list></type-logement-list>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection