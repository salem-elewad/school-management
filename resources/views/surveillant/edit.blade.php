@extends('template')

@section('content')
    <form action="{{ route('surveillants.update', ['surveillant' => $surveillant->id ]) }}" method="post">
        @csrf
        @method('put')
        <div class="field">
            <label class="label">Nom</label>
            <div class="control">
                <input class="input" type="text" placeholder="Nom" name="nom" value="{{ $surveillant->nom }}">
            </div>
        </div>

        <div class="field">
            <label class="label">Prenom</label>
            <div class="control">
                <input class="input" type="text" placeholder="Prenom" name="prenom" value="{{ $surveillant->prenom }}">
            </div>
        </div>

        <div class="field">
            <label class="label">Age</label>
            <div class="control">
                <input class="input" type="number" placeholder="Age" name="age" value="{{ $surveillant->age }}">
            </div>
        </div>

        <div class="field">
            <label class="label">Specialite</label>
            <div class="control">
                <input class="input" type="text" placeholder="Specialite" name="specialite" value="{{ $surveillant->specialite }}">
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link">Modifier</button>
            </div>
            <div class="control">
                <button class="button is-link is-light">Annulé</button>
            </div>
        </div>
    </form>
@endsection
