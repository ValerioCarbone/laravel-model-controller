@forelse ($movies as $movie)
    <p>{{ $movie->title }}</p>
@empty
    <p>Nessun film trovato</p>
@endforelse
