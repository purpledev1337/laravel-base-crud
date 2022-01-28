@extends('layouts.main-layout')

@section('content')

    <h5>
        Selected comic ID: {{ $comic -> id }}
    </h5>
    <div>
        <h2>
        Title: {{ $comic -> title }}
        </h2>
        <h4>
        Author: {{ $comic -> author }}
        </h4>
        <h5>
        Released: {{ $comic -> release_date }}
        </h5>
        <h6>
        n. of pages: {{ $comic -> pages }}
        </h6>
    </div>
    <a href="{{ route('home')}}">
        Return to Homepage
    </a>
    
@endsection

