@extends('layouts.base')

@section('title')
    Fumetto fantastico {{ $comic->title }}
@endsection

@section('content')
    @if (session('success_create'))
        <div class="alert alert-success">
            Il post e' stato creato
        </div>
    @endif
    <ul>
        <li>ID: {{ $comic->id }}</li>
        <li>Titolo: {{ $comic->title }}</li>
        <li>Descrizione: {{ $comic->description }}</li>
        <li>Link: {{ $comic->thumb }}</li>
        <li>Prezzo: {{ $comic->price }}€</li>
        <li>Serie: {{ $comic->series }}</li>
        <li>Disponibile da: {{ $comic->sale_date }}</li>
        <li>Tipo: {{ $comic->type }}</li>
    </ul>
    <div class="actions">
        <a href="{{ route('comics.edit', ['comic' => $comic]) }}" class="btn btn-warning">Edita</a>
        <form action="{{ route('comics.destroy', ['comic' => $comic]) }}" method="post">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger">Elimina</button>
        </form>
    </div>
@endsection
