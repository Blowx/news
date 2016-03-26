@extends('layouts.app')

@section('content')
    <div class="container">
    <form method="post" action="/">
        {{csrf_field()}}
        <fieldset class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title">
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
    </div>
@endsection
