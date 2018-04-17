@extends('layout')

@section('content')
    <h1>{{ $id->title }}</h1>
    <ul>
        @foreach($id->notes as $note)
            <li>{{ $note->body }}</li>
        @endforeach
    </ul>
@stop