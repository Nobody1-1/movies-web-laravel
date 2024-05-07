<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $popularMovies = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/movie/popular')->json()['results'];
        $genresMovies = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/genre/movie/list')->json()['genres'];
        $genresArray = collect($genresMovies)->mapWithKeys(function ($genre){
            return [$genre['id']=>$genre['name']];
        });
        dump($popularMovies);
        return view('index',compact('popularMovies','genresArray'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/movie/'.$id)->json();
        dump($movie);
        return view('show',compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
