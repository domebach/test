<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
</head>
<body>
    <h1>Test</h1>

    @foreach ($test as $tests)
        <ul>
            <li>{{$tests->name}}</li>
        </ul>
    @endforeach
</body>
</html>
