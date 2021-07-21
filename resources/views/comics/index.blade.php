@extends('layouts.app')

@section('title')
    <title>DC | Comics</title>
@endsection

@section('content')

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>    
    @endif

    <a class="btn btn-primary my-2" href="{{ route('comics.create') }}">Aggiungi Fumetto</a>
    <table class="mt-5 table table-dark table-responsive table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Tipo</th>
                <th colspan="3">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('comics.show', $comic->id) }}">Mostra</a>
                    </td>
                    <td>
                        <a class="btn btn-warning text-light" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
                    </td>
                    <td>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" onSubmit="return confirm('Sei sicuro di voler eliminare {{ $comic->title }}?')">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Elimina">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>{{ $comics->links() }}</div>
@endsection