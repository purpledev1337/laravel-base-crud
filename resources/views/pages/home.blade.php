@extends('layouts.main-layout')

@section('content')

    <h1>This is our library:</h1>

    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('show', $comic -> id) }}">
                    {{ $comic -> id }} -
                    {{ $comic -> title }}
                </a>
            </li>
        @endforeach
    </ul>
    
@endsection

