<x-auth-layout>
    <x-slot:title>Un oubli arrive si vite !</x-slot>

    <x-slot:description>
        Pour créer un nouveau mot de passe, renseignez votre adresse e-mail afin de recevoir un lien pour le réinitialiser.
    </x-slot>

    <form action="{{ route('password.email') }}" method="POST" novalidate>
        @csrf

        @if (session('status'))
        <!-- Message de confirmation -->
        <div class="rounded-md bg-green-50 p-4 mb-8">
            <div class="flex">
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

        <div class="space-y-6">
            <x-textual-input type="email" name="email" label="Adresse e-mail" />

            <div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Envoyer le lien de réinitialisation</button>
            </div>
        </div>
    </form>
</x-auth-layout>
