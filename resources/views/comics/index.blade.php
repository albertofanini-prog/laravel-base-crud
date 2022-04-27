{{-- @dump($comics) --}}

@extends('layouts.app')

@section('content')

<main>
    <div class="container">
        <h1>
            Elenco comics
        </h1>
        <a href="{{route('comics.create')}}">Nuovo comic</a>
    </div>
    <div class="container">
        <table>
            <thead>
                <th>ID</th>
                <th>Titolo</th>
                <th>Description</th>
                <th>Prezzo</th>
                <th>Series</th>
                <th>Vendita</th>
                <th>Tipo</th>
                <th></th>
            </thead>
            <body>
                @foreach ($comics as $c)
                    <tr>
                        <td>
                            {{$c->id}}
                        </td>
                        <td>
                            {{$c->title}}
                        </td>
                        <td>
                            {{$c->description}}
                        </td>
                        <td>
                            {{$c->price}}
                        </td>
                        <td>
                            {{$c->series}}
                        </td>
                        <td>
                            {{$c->sale_date}}
                        </td>
                        <td>
                            {{$c->type}}
                        </td>
                        <td>
                            <a href="{{route('comics.show', $c)}}">Visualizza</a>
                        </td>
                    </tr>
                @endforeach
            </body>
        </table>
    </div>
</main>

@endsection