@extends('layouts.app')


@section('content')

    {{Form::model($article, ['class' => 'form-horizontal', 'method' => 'put', 'route' => ['article.update', 'article' => $article->id]])}}
        @include('partials.article_form', ['btnName' => 'Изменить'])
    {{ Form::close() }}

@endsection