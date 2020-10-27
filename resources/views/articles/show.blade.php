@extends('layouts.app')

@section('title', "Статья - {$article->name}")
@section('header', $article->name)

@section('content')
    <article>
        <a href="{{ route('articles.index') }}">Назад</a>
        <p>
            {{ $article->body }}
        </p>
        <a href="{{ route('articles.index') }}">Назад</a>
    </article>
@endsection
