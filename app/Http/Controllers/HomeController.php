<?php

namespace App\Http\Controllers;

use App\Mail\APIKeyGenerated;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function apiKeys()
    {
        $users = User::with('tokens')->get();

        return view('admin', [
            'users' => $users,
        ]);
    }

    public function setApiKey(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer|exists:users,id'
        ]);

        // L'utilisateur pour lequel on veut générer un token
        $user = User::find($validated['user_id']);

        // On supprime tous ses tokens d'API existants
        $user->tokens()->delete();
        // On génère un nouveau token d'API
        $token = $user->createToken('default');

        // On envoie le token par mail
        // vendor/bin/sail artisan make:mail ApiTokenGenerated
        // On modifie le contenu du mail dans app/Mail/ApiTokenGenerated.php
        Mail::to($user)->send(new APIKeyGenerated($token));

        // On redirige vers la page admin avec un message de succès
        return back()->with('status', 'La clé a bien été générée !');
    }

    public function removeApiKey(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer|exists:users,id'
        ]);

        $user = User::find($validated['user_id']);

        $user->tokens()->delete();

        return back()->with('status', 'La clé a bien été supprimée !');
    }
}
