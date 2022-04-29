@extends('layouts.app')

@section('content')

    <main>

        {{-- @dump($comic); --}}

        <div class="container">
            <h1>
                Modifica comic
            </h1>
        </div>
        <div class="container">
            <form action="{{ route('comics.update', $comic->id)}}" method="POST">
                @csrf
                @method('PUT')
                {{-- <input type="hidden" name="_method" method="PUT"> --}}

                <div>
                    <label for="name">Titolo</label>
                    <input type="text" name="title" id="name" value="{{$comic->title}}" placeholder="Inserisci il titolo del comic">
                </div>
                <div>
                    <label for="name">Prezzo</label>
                    <input type="text" name="price" id="name" value="{{$comic->price}}" placeholder="Inserisci il prezzo">
                </div>
                <div>
                    <label for="name">Serie di appartenenza</label>
                    <input type="text" name="series" id="name" value="{{$comic->series}}" placeholder="Inserisci la serie">
                </div>
                <div>
                    <label for="name">Data di uscita</label>
                    <input type="text" name="sale_date" id="name" value="{{$comic->sale_date}}" placeholder="Inserisci la data di uscita">
                </div>
                <div>
                    <label for="name">Genere</label>
                    <select name="type" id="type">
                        <option value="comic book" {{$comic->type == 'comic book' ? 'selected' : ''}}>comic book</option>
                        <option value="graphic novel" {{$comic->type == 'graphic novel' ? 'selected' : ''}}>graphic novel</option>
                    </select>
                </div>
                <button type="submit">
                    Modifica
                </button>
            </form>
        </div>
    </main>

@endsection