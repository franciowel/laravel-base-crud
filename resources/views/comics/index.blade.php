@extends('layouts.app')

@section('main_content')
    <h2>
        Lista fumetti
    </h2>

    @foreach ($comics as $comic)
        <div>
            {{$comic->title}} - {{$comic->price}}
        </div>
        <div>
            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">Show More</a>
        </div>
    @endforeach
@endsection