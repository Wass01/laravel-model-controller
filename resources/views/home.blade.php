<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movie</title>
</head>
<body>
  @foreach ($movies as $movie)
        <div>
            <h1>Titolo: {{$movie->title}}</h1>
            <h2>Titolo originale:{{$movie->original_title}}</h2>
            <p>Nazionalità: {{$movie->nationality}}</p>
            <p>Data: {{$movie->date}}</p>
            <p>Voto: {{$movie->vote}}/10</p>
        </div>
    @endforeach
</body>
</html>
