<x-auth-layout>
    <x-slot:title>Connectez-vous</x-slot>

    <x-slot:description>
        Ou
        <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Inscrivez-vous</a>
    </x-slot>

    <form action="{{ route('login') }}" method="POST" novalidate>
        @csrf

        <div class="space-y-6">
            <x-textual-input type="email" name="email" label="Adresse e-mail" />

            <x-textual-input type="password" name="password" label="Mot de passe" />

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-900">Se souvenir de moi</label>
                </div>

                <div class="text-sm">
                    <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Mot de passe oublié?</a>
                </div>
            </div>

            <div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Connexion</button>
            </div>
        </div>
    </form>
</x-auth-layout>
