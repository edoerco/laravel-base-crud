@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.update', $editComic['id']) }}" method="post">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input value="{{ $editComic['title'] }}" type="text" name="title" class="form-control" id="title" placeholder="Inserisci il titolo">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <input value="{{ $editComic['description'] }}" type="text" name="description" class="form-control" id="description" placeholder="Inserisci la descrizione">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input value="{{ $editComic['price'] }}" type="number" name="price" class="form-control" id="price" placeholder="Inserisci il prezzo">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input value="{{ $editComic['series'] }}" type="text" name="series" class="form-control" id="series" placeholder="Inserisci la serie">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di vendita</label>
                        <input value="{{ $editComic['sale_date'] }}" type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Inserisci la data">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Genere</label>
                        <input value="{{ $editComic['type'] }}" type="text" name="type" class="form-control" id="type" placeholder="Inserisci il genere">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection