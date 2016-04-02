@extends ('layouts.app')

@section('content')

    <div class="container" style="text-align: center">
        <h1> {{$id->title}} </h1>
        <p>{{$id->desc}}</p>
        <p>Выпущено: {{$id->created_at}}</p>

    </div>



@endsection
