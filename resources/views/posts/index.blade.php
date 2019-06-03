@extends('layouts.app')

@section('content')
    <style type = "text/css">
    table{
        border:1ch;
        width: 100%;
        color:black;
        font-family: monospace;
        text-align: Left;
    }
    th{
        background-color:blueviolet;
        color: antiquewhite;
    }
    tr:nth-child(even){
        background-color: azure;
    }
    </style>
    @if(count($posts)>0)
    <table>
    <tr><td>ProjectName</td><td>CategoryCode</td><td>TaskCode</td><td>TaskDetails</td></tr>
        @foreach ($posts as $post)
        <tr>
        <td><a href="/posts/{{$post->id}}">{{$post->ProjectName}}</a></td>
        <td>{{$post->CategoryCode}}</td>
        <td>{{$post->TaskCode}}</td>
        <td>{{$post->TaskDetails}}</td>
        </tr>
        @endforeach
       
        </table>
    @else
        <p>No post found</p>
    @endif
@endsection