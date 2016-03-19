@extends('layouts.app')

@section('content')
    <form method="post" action="{{asset('home')}}">
        {{csrf_field()}}
        <fieldset class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title">
            @if ($errors->has('title'))
                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
            @endif
        </fieldset>

        <fieldset class="form-group">
            <label for="exampleTextarea">Short desc</label>
            <textarea class="form-control" name="shortdesc" rows="2"></textarea>
        </fieldset>
        <fieldset class="form-group">
            <label for="exampleTextarea">Текст новости</label>
            <textarea class="form-control" name="desc" rows="5"></textarea>
        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
