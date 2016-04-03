@extends('layouts.app')

@section('content')
    <div class="container">
    @if($errors->any())
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item list-group-item-info">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    </div>
    {{Form::open(['class' => 'form-horizontal',  'action' => 'HomeController@postIndex'])}}
    @include('partials.article_form', ['btnName' => 'Создать'])
    {{Form::close()}}
@endsection