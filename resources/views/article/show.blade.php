@extends('layouts.app')

@section('content')
    <h2><a href="/articles">Список статей</a></h2>
    <h1>{{$article->name}}</h1>
    <div>{{$article->body}}</div>
@endsection
