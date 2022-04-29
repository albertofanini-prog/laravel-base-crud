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

                <div class="form_group">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" name="title" class="@error('title') is-invalid @enderror form-control"  id="name" value="{{ old('title') ? old('title') : $comic->title}}" placeholder="Inserisci il titolo del comic">
                </div>
                <div class="form_group">
                    <label for="name" class="form-label">Prezzo</label>
                    <input type="text" name="price" class="@error('price') is-invalid @enderror form-control" id="name" value="{{ old('price') ? old('price') : $comic->price}}" placeholder="Inserisci il prezzo">
                </div>
                <div class="form_group">
                    <label for="name" class="form-label">Serie di appartenenza</label>
                    <input type="text" name="series" class="@error('series') is-invalid @enderror form-control" id="name" value="{{ old('series') ? old('series') : $comic->series}}" placeholder="Inserisci la serie">
                </div>
                <div class="form_group">
                    <label for="name" class="form-label">Data di uscita</label>
                    <input type="text" name="sale_date" class="@error('sale_date') is-invalid @enderror form-control" id="name" value="{{ old('sale_date') ? old('sale_date') : $comic->sale_date}}" placeholder="AAAA/MM/GG">
                </div>
                <div>
                    <label for="name">Genere</label>
                    <select name="type" id="type">
                        <option value="comic book" {{$comic->type == 'comic book' ? 'selected' : ''}}>comic book</option>
                        <option value="graphic novel" {{$comic->type == 'graphic novel' ? 'selected' : ''}}>graphic novel</option>
                    </select>
                </div>
                <button type="submit">
                    Salva
                </button>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{$error}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
        </div>
    </main>

@endsection