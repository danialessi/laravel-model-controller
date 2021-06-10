<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Elenco film</h1>

    <ul>
        @foreach ($movies as $movie)
            <li>
                <div><strong>Titolo:</strong>{{ $movie['title']}}</div>
                <div><strong>Titolo originale:</strong>{{ $movie['original_title']}}</div>
                <div><strong>Data di uscita:</strong>{{ $movie['date']}}</div>
                <div><strong>Voto:</strong>{{ $movie['vote']}}</div>
            </li>
        @endforeach
    </ul>
</body>
</html>