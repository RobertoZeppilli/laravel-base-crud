@extends('layouts.app')

@section('title')
    <title>DC | {{ $comic->title }}</title>
@endsection

@section('content')
    <div class="row my-4 bg-secondary bg-gradient text-light py-3 rounded">
        <h2 class="mb-5 h1 text-warning">{{ $comic->title }}</h2>
        <div class="col-2">
            <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
        <div class="col-7">
            <h5 class="text-warning">Trama</h5>
            <p>{{ $comic->description }}</p>
        </div>
        <div class="col-3">
            <h5><span class="text-warning text-bold">Prezzo:</span> {{ $comic->price }}&euro;</h5>
            <h5><span class="text-warning">Data d'uscita:</span> {{ $comic->sale_date }}</h5>
            <h5><span class="text-warning">Serie:</span> {{ $comic->series }}</h5>
            <h5><span class="text-warning">Tipo:</span> {{ $comic->type }}</h5> 
            <a class="btn btn-primary" href="{{ route('comics.index') }}">Torna al'elenco</a>
        </div>
    </div>
@endsection