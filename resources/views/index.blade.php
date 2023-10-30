@extends('layouts.app')

@section('title', 'Movies')

@section('content')

<main>
    <div class="container">
        <div class="row">

            @include('partials.cards')
            
        </div>
    </div>
</main>
@endsection