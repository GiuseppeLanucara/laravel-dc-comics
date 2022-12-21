@extends('layouts.app')

@section('title', 'Tutti i Comics')

@section('content')
    <section class="bg-secondary">
        <div class="container py-4">
            <h1 class="text-center">Tutti i nostri Comics</h1>
        </div>
    </section>

    <section>
        <div class="container mt-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Titolo</th>
                        <th scope="col">Genere</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->title }}</th>
                            <td>{{ $comic->type }}</td>
                            <td>{{ $comic->price }}</td>
                            <td><a class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}"><i
                                        class="fa-solid fa-circle-info"></i></a></td>
                        </tr>
                    @endforeach

                </tbody>
        </div>
    </section>

@endsection
