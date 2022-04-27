{{-- @dump($comics) --}}

@extends('layouts.app')

@section('content')

<table>
    <thead>
        <th>ID</th>
        <th>Titolo</th>
        <th>Prezzo</th>
        <th>Series</th>
        <th>Vendita</th>
        <th>Tipo</th>
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
            </tr>
        @endforeach
    </body>
</table>

@endsection