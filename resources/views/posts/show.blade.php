@extends('layouts.app')

@section('content')
    

<h1>{{$post->ProjectName}}</h1>
<div>
        {{$post->CategoryCode}}<hr>
        {{$post->TaskCode}}<hr>
        {{$post->TaskDetails}}<hr>
</div>
<hr>
<small>Written on {{$post->created_at}} </small>
<hr>
<a href = "\posts" class = "btn btn-default"> Back</a>
<a href = "\posts/{{$post->id}}/edit" class = "btn btn-success"> Edit</a>

{!!Form::open(['action'=>['PostController@destroy', $post->id],' method'=>'POST'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
@endsection

