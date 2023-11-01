<h1 class="text-center text-danger pt-5">Film</h1>

@forelse ($movies as $movie)

<div class="col-3 g-4">
    <div class="card h-100 p-2 bg-dark text-white">

        <h6 class="py-2">Title: {{$movie->title}}</h6>
        <img src="https://picsum.photos/400/200?random={{ $movie->id }}" class="my-3" alt="{{ $movie->original_title }}">
        <p>{{$movie->original_title}}</p>
        <p>{{$movie->nazionality}}</p>
        <p>{{$movie->date}}</p>
        <p>{{$movie->vote}}</p>

    </div>
</div>
@empty

<div class="col">
    <h2>No Movies in the database! 😥</h2>
</div>
@endforelse