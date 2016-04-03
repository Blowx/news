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
    {{--<form method="post" action="/">
        {{csrf_field()}}
        <fieldset class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title">
        </fieldset>

        <fieldset class="form-group">
            <label for="textarea">Short desc</label>
            <textarea class="form-control" name="shortdesc" rows="2"></textarea>
        </fieldset>
        <fieldset class="form-group">
            <label for="Textarea">Текст новости</label>
            <textarea class="form-control" name="desc" rows="5"></textarea>
        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>--}}
        {{ Form::open(['class' => 'form-horizontal', 'action' => 'HomeController@postIndex']) }}
            <div class="form-group">
                   {{ Form::label('title', 'Заголовок', ['class' => 'col-sm-2 control-label']) }}
                   <div class="col-sm-10">
                           {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) }}
                       </div>
               </div>

            <div class="form-group">
                   {{ Form::label('shortdesc', 'Короткое описание', ['class' => 'col-sm-2 control-label']) }}
                   <div class="col-sm-10">
                           {{ Form::textarea('shortdesc', null, ['class' => 'form-control', 'placeholder' => 'shortdesc']) }}
                       </div>
               </div>
            <div class="form-group">
                   {{ Form::label('desc', 'Описание', ['class' => 'col-sm-2 control-label']) }}
                   <div class="col-sm-10">
                           {{ Form::textarea('desc', null, ['class' => 'form-control', 'placeholder' => 'desc']) }}
                       </div>
               </div>
            <div class="form-group">
                   <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
        {{ Form::close() }}
    </div>
</div>

@endsection
