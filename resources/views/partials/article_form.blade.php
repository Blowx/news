<div class="container">
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
        <button type="submit" class="btn btn-primary">{{$btnName}}</button>
    </div>
    </div>
</div>