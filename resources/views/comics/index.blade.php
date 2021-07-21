@extends('layouts.app')

@section('title')
    <title>DC | Comics</title>
@endsection

@section('content')
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
                        <a class="btn btn-success" href="{{ route('comics.show', $comic->id) }}">Show</a>
                    </td>
                    <td>
                        <a class="btn btn-warning text-light" href="#">Edit</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>{{ $comics->links() }}</div>
@endsection