@extends('layouts.app')

@section('content')

    <main>
        <div class="container">
            <h1>
                Crea nuovo comic
            </h1>
        </div>
        <div class="container">
            <form action="{{ route('comics.store')}}" method="POST">
                @csrf

                <div>
                    <label for="name">Titolo</label>
                    <input type="text" name="title" id="name" placeholder="Inserisci il titolo del comic">
                </div>
                <div>
                    <label for="name">Prezzo</label>
                    <input type="text" name="price" id="name" placeholder="Inserisci il prezzo">
                </div>
                <div>
                    <label for="name">Serie di appartenenza</label>
                    <input type="text" name="series" id="name" placeholder="Inserisci la serie">
                </div>
                <div>
                    <label for="name">Data di uscita</label>
                    <input type="text" name="sale_date" id="name" placeholder="Inserisci la data di uscita">
                </div>
                <div>
                    <label for="name">Genere</label>
                    <select name="type" id="type">
                        <option value="comic book">comic book</option>
                        <option value="graphic novel">graphic novel</option>
                    </select>
                </div>
                <button type="submit">
                    Crea
                </button>
            </form>
        </div>
    </main>

@endsection