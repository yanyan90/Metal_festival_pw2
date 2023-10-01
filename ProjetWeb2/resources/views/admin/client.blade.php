<x-layout titre="Enregistrement" css="{{ asset('css/accueil.css') }}">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
            <span class="material-icons mx-auto h-10 w-auto text-indigo-600 text-8xl">
                assignment
            </span>
            <h2 class="mt-1 text-center text-2xl font-bold leading-9 tracking-tight text-gray-800">
                Enregistrez-vous
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            {{-- FORMULAIRE D'ENREGISTREMENT --}}
            <form class="space-y-6" action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- PRÉNOM --}}
                <div>
                    <label for="prenom" class="block text-sm font-medium leading-6 text-gray-900">Prénom</label>
                    <div class="mt-2">
                        <input id="prenom" name="prenom" type="text" value="{{ old('prenom') }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                {{-- NOM --}}
                <div>
                    <label for="nom" class="block text-sm font-medium leading-6 text-gray-900">Nom</label>
                    <div class="mt-2">
                        <input id="nom" name="nom" type="text" value="{{ old('nom') }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                {{-- EMAIL --}}
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" value="{{ old('email') }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                {{-- MOT DE PASSE --}}
                <div>
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Mot de passe</label>
                    <div class="mt-2">
                        <input id="password" name="password" type="password"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                {{-- CONFIRMATION DU MOT DE PASSE --}}
                <div>
                    <label for="confirmation_password"
                        class="block text-sm font-medium leading-6 text-gray-900">Confirmation du mot de passe</label>
                    <div class="mt-2">
                        <input id="confirmation_password" name="confirmation_password" type="password"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                {{-- TYPE DE COMPTE (account_type) cacher dans la vue   --}}
                <input type="hidden" id="account_type" name="account_type" value="employee">

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Créez votre compte!
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
