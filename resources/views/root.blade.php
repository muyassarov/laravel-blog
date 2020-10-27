@extends('layouts.app')

@section('title', 'Главная - личный блог')

@section('header', 'Главная. Мой блог о всем')

@section('content')
    <ul class="nav">
        <li>
            <a href="{{ route('pages.about') }}">About</a>
        </li>
        <li>
            <a href="{{ route('articles.index') }}">Articles</a>
        </li>
    </ul>
@endsection
