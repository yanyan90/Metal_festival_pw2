<x-layout titre="Dashboard Admin" css="{{ asset('css/admin.css') }}">
    <div class="navbar">
        <div class="navbar-left">
            {{ $admin->prenom }} {{ $admin->nom }}
        </div>
        <div class="navbar-right">
            <div class="button-group">
                <button class="btn btn-light2">
                    <a href="{{ route('admin.forfait') }}">Liste de réservation</a>
                </button>
                <button class="btn btn-light2">
                    <a href="{{ route('admin.index') }}">Liste de compte</a>
                </button>
                <button class="btn btn-light2">
                    <a href="{{ route('admin.groupe') }}">Liste de groupe</a>
                </button>
            </div>

            <a class="btn btn-light" href="{{ route('deconnexion') }}">Déconnexion</a>
        </div>
    </div>


    <div class="h2-employer">
        <h2 class="liste-reservation-officiel">Liste des clients</h2>
        <div></div>
    </div>
    <x-alertes.succes cle="succes" />
    <div class="table">
        <table class="table table-striped table-light custom-table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Courriel</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <tbody class="scroll">
                <div>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->nom }} </td>
                            <td>{{ $client->prenom }}</td>
                            <td>{{ $client->email }}</td>
                            <td><button class="btn btn-light mauve"><a
                                        href="{{ route('admin.edit', ['id' => $client->id]) }}">Modifier</a></button>
                            </td>
                            <td><button class="btn btn-light"><a
                                        href="{{ route('admin.destroy', ['id' => $client->id]) }}">SUPPRIMER</a></button>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

    <div class="h2-employer">
        <h2 class="liste-reservation">Liste des employés</h2>
        <button class="btn btn-light mauve"><a href="{{ route('admin.create') }}">AJOUTER</a></button>
    </div>

    <div class="table">
        <table class="table table-striped table-light custom-table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Courriel</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>


            <tbody class="scroll">
                <div>
                    @foreach ($employes as $employe)
                        <tr>
                            <td>{{ $employe->nom }} </td>
                            <td>{{ $employe->prenom }}</td>
                            <td>{{ $employe->email }}</td>
                            <td><button class="btn btn-light mauve"><a
                                        href="{{ route('admin.edit', ['id' => $employe->id]) }}">Modifier</a></td>
                            </button>
                            <td><button class="btn btn-light"><a
                                        href="{{ route('admin.destroy', ['id' => $employe->id]) }}">SUPPRIMER</a></td>
                            </button>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>


    <div class="h2-employer">
        <h2 class="liste-reservation">Liste des admins</h2>
        <button class="btn btn-light mauve"><a href="{{ route('admin.ajout') }}">AJOUTER</a></button>
    </div>
    <div class="table">
        <table class="table table-striped table-light custom-table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Courriel</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>


            <tbody class="scroll">
                <div>
                    @foreach ($admins as $admin)
                        <tr>

                            <td>{{ $admin->nom }} </td>
                            <td>{{ $admin->prenom }}</td>
                            <td>{{ $admin->email }}</td>
                            <td><button class="btn btn-light mauve"><a
                                        href="{{ route('admin.edit', ['id' => $admin->id]) }}">Modifier</a></button>
                            </td>
                            <td><button class="btn btn-light"><a
                                        href="{{ route('admin.destroy', ['id' => $admin->id]) }}">SUPPRIMER</a></button>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
