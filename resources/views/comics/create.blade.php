@extends('layouts.app')

@section('title', 'Aggiungi un nuovo Comic')

@section('content')
    <div class="container">
        <h2 class="text-center">Aggiungi un nuovo Comic alla lista</h2>
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title">Titolo</label>
                        <input type="varchar(200)" class="form-control" id="title" name="title">
                    </div>

                    <div class="mb-3">
                        <label for="description">Descrizione</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>

                    <div class="mb-3">
                        <label for="thumb">Immagine di Copertina</label>
                        <input type="text" class="form-control" id="thumb" name="thumb">
                    </div>

                    <div class="mb-3">
                        <label for="price">Prezzo</label>
                        <input type="varchar(8)" class="form-control" id="price" name="price">
                    </div>

                    <div class="mb-3">
                        <label for="series">Volume di Appartenenza</label>
                        <input type="varchar(100)" class="form-control" id="series" name="series">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date">Data di Uscita</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date">
                    </div>

                    <div class="mb-3">
                        <label for="type">Genere</label>
                        <input type="varchar(30)" class="form-control" id="type" name="type">
                    </div>
                    <button class="btn btn-primary" type="submit">Aggiungi</button>
                </form>
            </div>
        </div>

    </div>
@endsection
