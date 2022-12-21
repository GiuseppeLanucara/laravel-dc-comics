@extends('layouts.app')

@section('title', $comic->title)

@section('content')
    <div class="container">
        <h2>Comic {{ $comic->id }}</h2>
        <div class="mt-5">
            @if (!empty($comic->thumb))
                <img src="{{ $comic->thumb }}" alt="">
            @else
                <p>Immagine non disponibile</p>
            @endif
        </div>
        <dl>
            <dt>
                Titolo
            </dt>
            <dd>
                {{ $comic->title }}
            </dd>
            <dt>
                Descrizione
            </dt>
            <dd>
                {{ $comic->description }}
            </dd>
            <dt>
                Volume di Appartenenza
            </dt>
            <dd>
                {{ $comic->series }}
            </dd>
            <dt>
                Data di Pubblicazione
            </dt>
            <dd>
                {{ $comic->sale_date }}
            </dd>
        </dl>
    </div>
@endsection
