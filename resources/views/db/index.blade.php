@extends('layouts.app')

@section('content')
    <div class="container">
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
    </div>

@stop