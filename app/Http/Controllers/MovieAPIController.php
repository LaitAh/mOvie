<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieAPIController extends Controller
{
    /**
     * Permet de récupérer la liste complète des films.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Movie::all();
    }

    /**
     * Permet d'enregistrer un nouveau film.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'required|integer|min:0|max:18000', // 5h max
            'release' => 'required|date_format:Y-m-d',
            'director_id' => 'nullable|integer|exists:directors,id',
        ]);

        $movie = Movie::create($validated);
    }

    /**
     * Permet de récupérer un film.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return $movie;
    }

    /**
     * Permet de mettre à jour un film.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'duration' => 'nullable|integer|min:0|max:18000', // 5 heures max
            'release' => 'nullable|date_format:Y-m-d',
            'director_id' => 'nullable|integer|exists:directors,id',
        ]);

        $movie->update($validated);

        return $movie;
    }

    /**
     * Permet de supprimer un film.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
    }

    public function actors(Movie $movie)
    {
        return $movie->actors;
    }

    public function director(Movie $movie)
    {
        return $movie->director;
    }

    public function addActor(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'actor_id' => 'required|integer|exists:actors,id'
        ]);

        if (! $movie->actors->contains('id', ($validated['actor_id']))) {
            $movie->actors()->attach($validated['actor_id']);
        }
    }
}
