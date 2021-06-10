<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset( 'css/app.css' )}}">
</head>
<body>

    <header>
        <div class="title">
            <h1>Fake Movie DB</h1>
        </div>
    </header>

    <main>
        <div class="movies-container">
            @foreach($movies as $movie)
            <div class="single-movie">
                <div><strong>Titolo:</strong>{{ $movie['title']}}</div>
                <div><strong>Titolo originale:</strong>{{ $movie['original_title']}}</div>
                <div><strong>Data di uscita:</strong>{{ $movie['date']}}</div>
                <div><strong>Voto:</strong>{{ $movie['vote']}}</div>
            </div>
            @endforeach
        </div>
    </main>

    
</body>
</html>