<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorAPIController extends Controller
{
    /**
     * Permet de récupérer la liste complète des acteurs.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Actor::all();
    }

    /**
     * Permet d'enregistrer un nouvel acteur.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $actor = Actor::create($validated);

        return $actor;
    }

    /**
     * Permet de récupérer un acteur.
     *
     * @param  \App\Models\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function show(Actor $actor)
    {
        return $actor;
    }

    /**
     * Permet de mettre à jour un acteur.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actor $actor)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255'
        ]);

        $actor->update($validated);

        return $actor;
    }

    /**
     * Permet de supprimer un acteur.
     *
     * @param  \App\Models\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actor $actor)
    {
        $actor->delete();
    }
}
