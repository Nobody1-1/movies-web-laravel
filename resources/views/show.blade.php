@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class='card mr-5'>
                <img src="https://image.tmdb.org/t/p/w500/{{$movie['poster_path']}}" width='450' height='500' class="card-img-top" alt="...">
            </div>
            <div class=''>
                <h2 class='fs-1 fw-bolder'>{{$movie['title']}}</h2>
                <div class="d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
                    <span class=" fw-light fs-1 ml-1">{{$movie['vote_average']*10 . '%'}}</span>
                    <span class='mx-1'>|</span>
                    <span class="" >{{\Carbon\Carbon::parse($movie['release_date'])->format('M d,Y')}}</span>
                    <span class='mx-1'>|</span>
                    <div class="d-flex flex-wrap lh-1 fs-1">
                        @forEach($movie['genres'] as $genre)
                        <span class="">{{$genre['name']}}@if(!$loop->last), @endif</span>
                        @endForEach
                    </div>
                </div>
                <div style="max-width: 600px; margin-top: 40px;"> <!-- Atur lebar maksimum sesuai kebutuhan -->
                    <p class="text-wrap"> <!-- Gunakan text-wrap untuk memastikan teks tidak keluar dari batas -->
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nec libero nec est sollicitudin convallis. Proin malesuada sollicitudin dui nec convallis. Vivamus rhoncus tristique sem. Donec sed suscipit tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi vitae massa in tellus bibendum bibendum. Nulla facilisi.
                    </p>
                </div>
                <div>
                    <h5>Featured crew</h5>
                    <div class="d-flex">
                        <div>
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection