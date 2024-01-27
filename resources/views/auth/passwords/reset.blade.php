<x-auth-layout>
    <x-slot:title>C'est presque fini !</x-slot>

    <x-slot:description>
        Il ne vous reste plus qu'à créer votre nouveau mot de passe !
    </x-slot>

    <form action="{{ route('password.update') }}" method="POST" novalidate>
        @csrf

        <!-- Token reçu par mail -->
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="space-y-6">
            <x-textual-input type="email" name="email" label="Adresse e-mail" />

            <x-textual-input type="password" name="password" label="Mot de passe" />

            <x-textual-input type="password" name="password_confirmation" label="Confirmation du mot de passe" />

            <div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Changer le mot de passe</button>
            </div>
        </div>
    </form>
</x-auth-layout>
