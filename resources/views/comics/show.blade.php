@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-4">Dettaglio: {{ $info_comic['title'] }}</h1>
                <div class="comic-card">
                    <div class="comic-photo">
                        <img class="mb-4" src="{{ $info_comic['image'] }}" alt="">
                    </div>
                    <div class="comic-text">
                        <p>{{ $info_comic['description'] }}</p>
                    </div>
                    <p>Prezzo: {{ $info_comic['price'] }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection