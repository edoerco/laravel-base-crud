@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{-- aggiungo il messaggio di errore nel caso in cui i campi del validate non vengano rispettati --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{ route('comics.store') }}" method="post">
                    @csrf
                    @method('POST')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Inserisci il titolo">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <input type="text" name="description" class="form-control" id="description" placeholder="Inserisci la descrizione">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="number" name="price" class="form-control" id="price" placeholder="Inserisci il prezzo">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" name="series" class="form-control" id="series" placeholder="Inserisci la serie">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di vendita</label>
                        <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Inserisci la data">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Genere</label>
                        <input type="text" name="type" class="form-control" id="type" placeholder="Inserisci il genere">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection