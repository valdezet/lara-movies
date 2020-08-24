{{-- 
    required variables:
    $actor :: the actor entry    
    $roles :: actor roles table
--}}

@extends('layouts.default')

@section('page_title', $actor->actor_fullname )
@section('main_content')
    <div class="row ">
        <div class="col-lg-5">
            <figure>
                <img src="" alt="{{ $actor->actor_fullname }} Poster">
            </figure>
        </div>
        <div class="col-lg-7">
            <h3>{{ $actor->actor_fullname }}
            <small><i class="fas fa-edit" title="edit"></i> <i class="fas fa-trash" title="delete"></i></small></h3>
            <p>Info: {{ $actor->actor_notes }}</p>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
            <h4>Stars in</h4>
            <table class="table table-small table-striped">
                <thead>
                    <tr>
                        <th>Film</th>
                        <th>Character name</th>
                        <th>Role </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($actor->film()->get() as $film)
                        <tr>
                            <td><a href="{{ action('FilmController@show', $film) }}"> {{ $film->film_title }}</a></td>
                            <td>{{ $film->pivot->character }}</td>
                            <td>{{ $roles[$film->pivot->role_id-1]['role'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection