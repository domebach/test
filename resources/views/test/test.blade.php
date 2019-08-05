<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
</head>
<body>
    <h1>Test</h1>

    @foreach ($test as $tests)
        <ul>
            <li>{{$tests->name}}, {{$tests->age}}</li>
        </ul>
    @endforeach

    <a href="/test/create">Go to User-Creation</a>
</body>
</html>
