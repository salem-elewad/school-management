@extends('template')

@section('css')
    <style>
        .card-footer {
            justify-content: center;
            align-items: center;
            padding: 0.4em;
        }

    </style>
@endsection

@section('content')
    <div class="card">
        @if(session()->has('info'))
            <div class="notification is-success">{{ session('info') }}</div>
        @endif
        <header class="card-header">
            <p class="card-header-title">surveillants</p>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Age</th>
                            <th>Specialite</th>
                            <th colspan="3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($surveillants as $surveillant)
                            <tr>
                                <td>{{ $surveillant->id }}</td>
                                <td><strong>{{ $surveillant->nom }}</strong></td>
                                <td><strong>{{ $surveillant->prenom }}</strong></td>
                                <td><strong>{{ $surveillant->age }}</strong></td>
                                <td><strong>{{ $surveillant->specialite }}</strong></td>
                                <td><a class="button is-primary" href="{{ route('surveillants.show', $surveillant->id) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('surveillants.edit', $surveillant->id) }}">Modifier</a>
                                </td>
                                <td>
                                    <form action="{{ route('surveillants.destroy', $surveillant->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <footer class="card-footer">
            {{ $surveillants->links() }}
        </footer>
    </div>
@endsection
