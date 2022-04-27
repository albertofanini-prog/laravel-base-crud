{{-- @dump($comics) --}}

@extends('layouts.app')

@section('content')

<table>
    <body>
        @foreach ($comics as $c)
            <tr>
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