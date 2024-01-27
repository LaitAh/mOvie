<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mO'vie{{ isset($title) ? " - $title" : '' }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <!-- Header -->
    <header class="bg-indigo-600">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Top">
            <div class="w-full py-6 flex items-center justify-between border-b border-indigo-500 lg:border-none">
                <div class="flex items-center">
                    <a href="{{ route('index') }}"">
                        <span class="sr-only">mO'vie</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                        </svg>
                    </a>
                    <div class="hidden ml-10 space-x-8 lg:block">
                        <a href="{{ route('scribe') }}" target="_blank" class="text-base font-medium text-white hover:text-indigo-50">Documentation API</a>
                        @auth
                        @if (auth()->user()->is_admin)
                            <a href="{{ route('api-keys') }}" class="text-base font-medium text-white hover:text-indigo-50">Clés d'API</a>
                        @endif
                        <a href="{{ route('home') }}" class="text-base font-medium text-white hover:text-indigo-50">Compte</a>
                        <a href="{{ route('logout') }}" class="text-base font-medium text-white hover:text-indigo-50" onclick="event.preventDefault();document.getElementById('logout-form').submit()">Déconnexion</a>
                        @endauth
                    </div>
                </div>
                @guest
                <div class="ml-10 space-x-4">
                    <a href="{{ route('login') }}" class="inline-block bg-indigo-500 py-2 px-4 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-75">Connexion</a>
                    <a href="{{ route('register') }}" class="inline-block bg-white py-2 px-4 border border-transparent rounded-md text-base font-medium text-indigo-600 hover:bg-indigo-50">Inscription</a>
                </div>
                @endguest
            </div>
            <div class="py-4 flex flex-col items-center text-center lg:hidden">
                <a href="{{ route('scribe') }}" target="_blank" class="text-base font-medium text-white hover:text-indigo-50">Documentation API</a>
                @auth
                @if (auth()->user()->is_admin)
                <a href="{{ route('api-keys') }}" class="text-base font-medium text-white hover:text-indigo-50">Clés API</a>
                @endif
                <a href="{{ route('home') }}" class="text-base font-medium text-white hover:text-indigo-50">Compte</a>
                <a href="{{ route('logout') }}" class="text-base font-medium text-white hover:text-indigo-50" onclick="event.preventDefault();document.getElementById('logout-form').submit()">Déconnexion</a>
                <form action="{{ route('logout') }}" method="POST" id="logout-form" class="hidden">
                    @csrf
                </form>
                @endauth
            </div>
        </nav>
    </header>

    @if (session('status'))
    <!-- Message de confirmation -->
    <div class="rounded-md bg-green-50 p-4">
        <div class="flex max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-green-800">{{ session('status') }}</p>
            </div>
        </div>
    </div>
    @endif

    {{ $slot }}
</body>
</html>
