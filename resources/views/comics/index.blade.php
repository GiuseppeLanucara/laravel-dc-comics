@extends('layouts.app')

@section('title', 'Tutti i Comics')

@section('content')
    <section class="text-primary">
        <div class="container py-4">
            <h1 class="text-center">Tutti i nostri Comics</h1>
        </div>
    </section>

    <section>
        <div class="container mt-5">
            <div class="add mt-4 mb-4">
                <a href="{{ route('comics.create') }}" class="btn btn-primary">Aggiungi un Comic alla lista</a>
            </div>
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
                            <td>
                                <a class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}"><i
                                        class="fa-solid fa-circle-info"></i></a>
                                <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}"><i
                                        class="fa-solid fa-arrows-to-circle"></i></a>

                                <form action="{{ route('comics.destroy', $comic->id) }}" class="d-inline" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa-solid fa-recycle"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
        </div>
    </section>

@endsection
