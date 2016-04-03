
@extends('layouts.app')

@section('content')
    {{--<div class="container">
    <table class="table">
        <thead>
        <tr>
            <td>title</td>
            <td>shortdesc</td>
            <td>desc</td>
        </tr>

        </thead>
        <tbody>
        @foreach($results as $result)
            <tr>
                <td>{{$result->title}}</td>
                <td>{{$result->shortdesc}}</td>
                <td>{{$result->desc}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>--}}

<div class="container" style="text-align: center;">

    @foreach($results as $res)
        <h1><a href="article/{{$res->id}}">{{$res->title}}</a></h1>
        <h2>{{$res->desc}}</h2>
        <a href="article/{{$res->id}}/edit" class="pull-right">Редактировать</a>
        <hr>

    @endforeach
 {!! $results->render() !!}
</div>




@stop