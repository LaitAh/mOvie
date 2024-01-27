<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorAPIController extends Controller
{
    /**
     * Permet de récupérer la liste complète des réalisateurs.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Director::all();
    }

    /**
     * Permet d'enregistrer un nouveau réalisateur.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $director = Director::create($validated);

        return $director;
    }

    /**
     * Permet de récupérer un réalisateur.
     *
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function show(Director $director)
    {
        return $director;
    }

    /**
     * Permet de mettre à jour un réalisateur.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Director $director)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
        ]);

        $director->update($validated);

        return $director;
    }

    /**
     * Permet de supprimer un réalisateur.
     *
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function destroy(Director $director)
    {
        $director->delete();
    }
}
