@extends('layouts.app')

@section('main_content')
    <h2>
        Lista fumetti
    </h2>

    @foreach ($comics as $comic)
        <div>
            {{$comic->title}} - {{$comic->price}}
        </div>
    @endforeach
@endsection