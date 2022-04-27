@extends('layouts.app')

@section('content')
    
    {{-- @dump($comic) --}}
    <main>
        <section>
            <div class="container">
                <h1>
                    {{$comic->title}}
                </h1>
            </div>
            <div class="container">
                <ul>
                    <li>
                        {{$comic->series}}
                    </li>
                    <li>
                        {{$comic->sale_date}}
                    </li>
                    <li>
                        {{$comic->type}}
                    </li>
                </ul>
                <p>
                    {!! $comic->price !!}
                </p>
            </div>
        </section>
    </main>

@endsection