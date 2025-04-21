@extends('layouts.app')

@if(session()->has('success'))
  <div class="alert alert-success  role="alert>
    {{ session()->get('success') }}
  </div>
@endif

@if(session()->has('error'))
  <div class="alert alert-danger">
    {{ session()->get('error') }}
  </div>
@endif

{{ html()->modelForm($article, 'POST', route('articles.store'))->open() }}
    @include('article.form')
    {{ html()->submit('Создать') }}
{{ html()->closeModelForm() }}

@section('content')
    <h2><a href="/articles">Список статей</a></h2>
    <h1>{{$article->name}}</h1>
    <div>{{$article->body}}</div>
@endsection
