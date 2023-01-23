@extends('layouts.base')

@section('title', 'Inserisci un nuovo fumetto')

@section('content')
    <form method="post" action="{{ route('comics.update', ['comic' => $comic]) }}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{ $comic->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Link</label>
            <textarea class="form-control" name="thumb" id="thumb" rows="3">{{ $comic->thumb }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $comic->price }}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="number" class="form-control" id="series" name="series" value="{{ $comic->series }}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Disponibile da</label>
            <input type="date" class="form-control" id="sale_date" name="sale-date" value="{{ $comic->sale_date }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
        </div>
        <button type="submit" class="btn btn-primary">Aggiorna</button>
    </form>
@endsection
