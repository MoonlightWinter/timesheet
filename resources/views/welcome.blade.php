@extends('layouts.app')

@section('content')
    <h1> {{$title}}</h1>
    @if(count($prototypes) > 0)
        <ul class = 'list-group'>
            @foreach ($prototypes as $prototype)
                <li class = "list-group-item">
                        <a class="nav-link" href="/posts/create">{{$prototype}}</a></li>
            @endforeach
        </ul>
    @endif    
@endsection