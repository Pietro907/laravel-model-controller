<div class="container">
    <div class="row">

        @forelse ($movies as $movie)
        <div class="col-2">
            <div class="card">

                <h6>Title: {{$movie->title}}</h6>

                <p>{{$movie->original_titl}}</p>
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
    </div>
</div>