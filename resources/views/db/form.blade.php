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
    <form method="post" action="/">
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
    </form>
    </div>
@endsection
