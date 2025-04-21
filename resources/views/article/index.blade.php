@extends('layouts.app')

@section('scripts')
    <script src="{{ asset('js/app.js') }}"></script> <!-- Подключите Laravel скрипты -->
@endsection

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

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

@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2><a href="articles/{{$article->id}}">{{$article->name}}</a></h2>
        <h4><a href="articles/{{$article->id}}/edit">Редактировать</a></h4>
        <a href="{{ route('articles.destroy', $article) }}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Удалить</a>
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection
