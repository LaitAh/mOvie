<x-auth-layout>
    <x-slot:title>Inscrivez-vous</x-slot>

    <x-slot:description>
        Ou
        <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Connectez-vous</a>
    </x-slot>

    <form action="{{ route('register') }}" method="POST" novalidate>
        <!-- Champ Token CSRF -->
        @csrf

        <div class="space-y-6">
            <x-textual-input name="name" label="Nom complet" />

            <x-textual-input type="email" name="email" label="Adresse e-mail" />

            <x-textual-input type="password" name="password" label="Mot de passe" />

            <x-textual-input type="password" name="password_confirmation" label="Confirmation du mot de passe" />

            <div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Inscription</button>
            </div>
        </div>
    </form>
</x-auth-layout>
