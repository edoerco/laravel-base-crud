@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4">Indice dei fumetti</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Descrizone</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Serie</th>
                            <th scope="col">Data di vendita</th>
                            <th scope="col">Genere</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $comic)
                            <tr>
                                <th scope="row">{{ $comic['id'] }}</th>
                                <td>{{ $comic['title'] }}</td>
                                <td>{!! $comic['description'] !!}</td>
                                <td>{{ $comic['price'] }}€</td>
                                <td>{{ $comic['series'] }}</td>
                                <td>{{ $comic['sale_date'] }}</td>
                                <td>{{ $comic['type'] }}</td>
                                <td>
                                    <a href="{{ route('comics.show', $comic['id']) }}" class="btn btn-info">Dettagli</a>
                                    <a href="{{ route('comics.edit', $comic['id']) }}" class="btn btn-warning">Modifica</a>
                                    <form action="{{ route('comics.destroy', $comic['id']) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        
                                        <button type="submit" class="btn btn-danger">Cancella</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection