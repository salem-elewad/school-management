@extends('template')

@section('content')
    <form action={{ route('surveillants.store') }} method="post">
        @csrf
        <div class="field">
            <label class="label">Nom</label>
            <div class="control">
                <input class="input" type="text" placeholder="Nom" name="nom">
            </div>
        </div>

        <div class="field">
            <label class="label">Prenom</label>
            <div class="control">
                <input class="input" type="text" placeholder="Prenom" name="prenom">
            </div>
        </div>

        <div class="field">
            <label class="label">Age</label>
            <div class="control">
                <input class="input" type="number" placeholder="Age" name="age">
            </div>
        </div>

        <div class="field">
            <label class="label">Specialite</label>
            <div class="control">
                <input class="input" type="text" placeholder="Specialite" name="specialite">
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link">Ajouté</button>
            </div>
            <div class="control">
                <button class="button is-link is-light">Annulé</button>
            </div>
        </div>
    </form>
@endsection
