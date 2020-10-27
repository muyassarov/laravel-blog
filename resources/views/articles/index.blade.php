@extends('layouts.app')

@section('title', 'Список статей')
@section('header', 'Список статей')

@section('content')
    @foreach ($articles as $article)
        <h2>{{$article->name}}</h2>
        <div>{{Illuminate\Support\Str::limit($article->body, 200)}}</div>
        <div><a href="{{ route('articles.show', $article->id) }}">Прочитать</a></div>
        <hr/>
    @endforeach
    {{ $articles->links() }}
@endsection
