@extends('layouts.app');

@section('title', 'Modifica i dati')


@section('content')

    <div class="container">
        <h2>Modifica i dati del fumetto: {{ $comic->title }}</h2>
        <div class="row col-6 justify-content-center">
            <form action="">
                <div class="mb-3 mt-3">
                    <label for="title">Titolo</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ $comic->title }}">
                </div>

                <div class="mb-3">
                    <label for="description">Descrizione</label>
                    <textarea name="description" id="description" class="form-control" rows="10">{{ $comic->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb">Immagine di Copertina</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                </div>

                <div class="mb-3">
                    <label for="price">Prezzo</label>
                    <input type="varchar(8)" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                </div>

                <div class="mb-3">
                    <label for="series">Volume di Appartenenza</label>
                    <input type="varchar(100)" class="form-control" id="series" name="series"
                        value="{{ $comic->series }}">
                </div>

                <div class="mb-3">
                    <label for="sale_date">Data di Uscita</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date"
                        value="{{ $comic->sale_date }}">
                </div>

                <div class="mb-3">
                    <label for="type">Genere</label>
                    <input type="varchar(30)" class="form-control" id="type" name="type"
                        value="{{ $comic->type }}">
                </div>
            </form>
        </div>
    </div>
@endsection
