<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <h1>Biodata</h1>
    <h2>Nama : {{$nama}}</h2>
    <hr>
    <h2>Ngoding</h2>
    <ul>
        @foreach ($ngoding as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</body>
</html>