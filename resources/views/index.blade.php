@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row">
            @forEach($popularMovies as $popularMovie)
                <div class="card col-md-3 pt-3" style="width: 18rem;">
                    <a href="{{route('show',$popularMovie['id'])}}">
                        <img src="https://image.tmdb.org/t/p/w500/{{$popularMovie['poster_path']}}" class="card-img-top" alt="...">

                    </a>
                    <div class="card-body row justify-content-beetwen">
                        <div class='mb-3 '>
                            <h5 style='height: 45px;'>
                                <a class="card-title fw-bold" >{{$popularMovie['title']}}</a>
                                
                            </h5>
                            <div class="d-flex m-0 align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
        </svg>
                                <span class=" fw-light fs-1 ml-1">{{$popularMovie['vote_average']*10 . '%'}}</span>
                                <span class='mx-1'>|</span>
                                <span class="" >{{\Carbon\Carbon::parse($popularMovie['release_date'])->format('M d,Y')}}</span>
                            </div>
                            <div class="d-flex flex-wrap lh-1 fs-1">
                                @forEach($popularMovie['genre_ids'] as $genre)
                                <span class="">{{$genresArray->get($genre)}}@if(!$loop->last), @endif</span>
                                @endForEach
                            </div>

                        </div>
                        <a href="#" class="btn btn-primary align-self-end">Go Watch</a>
                    </div>
                </div>
            @endForEach

        </div>

    </div>

@endsection