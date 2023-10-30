@forelse ($movies as $movie)
<div class="col-2">
    <div class="card mt-5 text-danger">

        <h6>Title: {{$movie->title}}</h6>
        <img src="https://picsum.photos/400/200?random={{ $movie->id }}" class="card-img-top rounded-2 mb-3" alt="{{ $movie->original_title }}">
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