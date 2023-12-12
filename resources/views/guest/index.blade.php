<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1 class="text-center py-4">Movies</h1>
    <div class="container">
        <div class="row">
            @forelse ($movies as $movie)
                <div class="col-4 text-center">

                    @if ($movie->title == $movie->original_title)
                        <h3>{{ $movie->title }}</h3>
                    @else
                        <h3>{{ $movie->title }}</h3>
                        <p>Original Title: {{ $movie->original_title }}</p>
                    @endif
                    @if ($movie->nationality = 'american')
                        <p>Nationaility: Us </p>
                    @elseif ($movie->nationality = 'american/british')
                        <p>Nationality: Us/Gb </p>
                    @endif
                    <p>Release date: {{ $movie->date }}</p>
                    <p>Vote: {{ $movie->vote }}</p>
                </div>
            @empty

                <p>Nessun film trovato</p>
            @endforelse
        </div>
    </div>
</body>

</html>
