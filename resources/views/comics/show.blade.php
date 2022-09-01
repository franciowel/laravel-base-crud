@extends('layouts.app')

@section('main_content')

    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">

    <h3>{{ $comic->title }}</h3>

    <p>Genere: {{ $comic->type }}</p>

    <p>Prezzo: {{ $comic->price }}</p>

    @if ($comic->description)
        <div>
            Descrizione:
            <p>
                {{ $comic->description }}
            </p>
        </div>
    @endif
    
@endsection