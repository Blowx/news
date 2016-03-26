<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
</head>
<body>
<div class="container">
    <ul>
        @foreach ($names as $name)
            <li><a href="/{{$name}}">{{$name}}</a></li>
        @endforeach
    </ul>
</div>
</body>
</html>