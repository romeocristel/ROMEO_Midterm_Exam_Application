<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>Theme:Movies</h1>
    <ul>
        @foreach ($products as $product)
        <li>{{ $product ['title']}}</li>
        <p>Director: {{ $product ['director']}}</p>
        <p>Year: {{ $product ['year']}}</p>
        @endforeach
    </ul>
</body>
</html>

