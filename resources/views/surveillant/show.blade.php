@extends('template')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Nom Complet  : {{ $surveillant->nom . ' ' . $surveillant->prenom }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Age : {{ $surveillant->age }}</p>
                <p>Specialite : {{ $surveillant->specialite }}</p>
            </div>
        </div>
    </div>
@endsection
