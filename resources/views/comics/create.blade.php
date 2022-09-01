@extends('layouts.app')

@section('main_content')
    <h2>
        Carica il tuo fumetto
    </h2>

    <form action="{{ route('comics.store')}}" method="post">
        @csrf

        {{-- TITLE --}}
        <div>
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title">
        </div>
        {{-- DESCRIPTION --}}
        <div>
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        {{-- THUMB-URL IMMAGINE --}}
        <div>
            <label for="thumb">Url IMG</label>
            <input type="text" id="thumb" name="thumb">
        </div>
        {{-- PRICE --}}
        <div>
            <label for="price">Prezzo</label>
            <input type="text" id="price" name="price">
        </div>
        {{-- SERIES --}}
        <div>
            <label for="series">Serie</label>
            <input type="text" id="series" name="series">
        </div>
        {{-- SALE DATE --}}
        <div>
            <label for="sale_date">Data uscita</label>
            <input type="text" id="sale_date" name="sale_date">
        </div>
        {{-- TYPE --}}
        <div>
            <label for="type">Titolo</label>
            <input type="text" id="type" name="type">
        </div>

        {{-- SUBMIT --}}
        <input type="submit" value="Invia">
    </form>

@endsection