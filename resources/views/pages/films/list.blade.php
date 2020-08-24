@extends('layouts.default')

@section('page_title', "Films")

{{-- 
    required variables:
    $films : the film list    
--}}
@section('main_content')
    <div class='row'>
        @foreach ($films as $film)
        <div class="col-lg-4 col-md-6">
            <div class="card" >
                <img class="card-img-top" src="..." alt="{{ $film->film_title }} Poster">
                <div class="card-body">
                <h5 class="card-title">{{ $film->film_title }}</h5>
                <p class="card-text">{{ $film->genre->genre }} -- {{ $film->duration }} minutes</p>
                <a href="{{ action('FilmController@show', $film) }}" class="btn btn-primary">More Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection