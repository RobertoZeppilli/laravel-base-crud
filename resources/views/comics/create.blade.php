@extends('layouts.app')

@section('title')
    <title>DC | Aggiungi</title>
@endsection

@section('content')
    <h2 class="my-3">Aggiungi un nuovo fumetto</h2>
    <form action="{{ route('comics.store') }}" method="POST" class="mt-3">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo del fumetto" name="title">
        </div>
        <div class="mb-3">
            <label for="thumb">Url Immagine</label>
            <input type="text" class="form-control" id="thumb" placeholder="Inserisci l'immagine di copertina del fumetto" name="thumb">
        </div>
        <div class="mb-3">
            <label for="price">Prezzo</label>
            <input type="number" step="0.01" class="form-control" id="price" placeholder="Inserisci il prezzo del fumetto" name="price">
        </div>
        <div class="mb-3">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" placeholder="Inserisci la serie a cui appartiene il fumetto" name="series">
        </div>
        <div class="mb-3">
            <label for="sale_date">Data d'uscita</label>
            <input type="date" class="form-control" id="sale_date" placeholder="Inserisci la data d'uscita" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="type">Tipo</label>
            <input type="text" class="form-control" id="type" placeholder="Inserisci il tipo di fumetto" name="type">
        </div>
        <div>
            <label for="description">Trama</label>
            <textarea class="form-control" id="description" name="description" placeholder="Inserisci la descrizione della birra" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary my-5">Salva</button>
        <a class="btn btn-secondary text-light" href="{{ route('comics.index') }}">Torna all'indice</a>
    </form>
@endsection