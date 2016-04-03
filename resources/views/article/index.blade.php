@extends('layouts.app')

@section('content')
    <div class="container" style="text-align: center;">

    @foreach($results as $res)
        <h1><a href="article/{{$res->id}}">{{$res->title}}</a></h1>
        <h2>{{$res->desc}}</h2>
        {{--<a href="article/{{$res->id}}/edit" class="pull-right">Редактировать</a>--}}
        <a href="{{ route('article.edit', ['id' => $res->id]) }}" class="pull-right">Редактировать</a>
        <hr>

    @endforeach
    {!! $results->render() !!}
</div>




@stop