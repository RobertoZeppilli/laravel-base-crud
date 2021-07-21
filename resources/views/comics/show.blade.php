@extends('layouts.app')

@section('title')
    <title>DC | {{ $comic->title }}</title>
@endsection

@section('content')

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    
    <div class="row my-4 bg-light bg-gradient text-dark py-3 rounded">
        <h2 class="mb-5 h1 text-warning">{{ $comic->title }}</h2>
        <div class="col-12 col-md-3 col-lg-2">
            <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
        <div class="col-12 col-md-5 col-lg-7">
            <h5 class="text-warning">Trama</h5>
            <p>{{ $comic->description }}</p>
        </div>
        <div class="col-12 col-md-4 col-lg-3">
            <h5><span class="text-warning text-bold">Prezzo:</span> {{ $comic->price }}&euro;</h5>
            <h5><span class="text-warning">Data d'uscita:</span> {{ $comic->sale_date }}</h5>
            <h5><span class="text-warning">Serie:</span> {{ $comic->series }}</h5>
            <h5><span class="text-warning">Tipo:</span> {{ $comic->type }}</h5> 
            <a class="btn btn-secondary text-light mt-2" href="{{ route('comics.index') }}">Torna all'indice</a>
            <a class="btn btn-warning text-light mt-2" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
        </div>
    </div>
@endsection