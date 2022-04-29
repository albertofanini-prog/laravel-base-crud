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

                <div class="form-group">
                    <label for="name" class="form-label">Titolo</label>
                    <input type="text" name="title" value="{{old('title')}}" id="name" class="@error('title' ) is-invalid @enderror form-control" placeholder="Inserisci il titolo del comic"/>

                    {{-- @error('title')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror --}}
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">Prezzo</label>
                    <input type="text" name="price" value="{{old('price')}}" id="name" class="@error('price' ) is-invalid @enderror form-control" placeholder="Inserisci il titolo del comic" placeholder="Inserisci il prezzo">
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">Serie di appartenenza</label>
                    <input type="text" name="series" value="{{old('series')}}" id="name"class="@error('series' ) is-invalid @enderror form-control" placeholder="Inserisci il titolo del comic" placeholder="Inserisci la serie">
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">Data di uscita</label>
                    <input type="text" name="sale_date" value="{{old('sale_date')}}" id="name" class="@error('sale_date' ) is-invalid @enderror form-control" placeholder="Inserisci il titolo del comic" placeholder="AAAA/MM/GG">
                </div>
                <div class="form-group">
                    <label for="name">Genere</label>
                    <select name="type" id="type">
                        <option value="comic book">comic book</option>
                        <option value="graphic novel">graphic novel</option>
                    </select>
                </div>
                <button type="submit">
                    Crea
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