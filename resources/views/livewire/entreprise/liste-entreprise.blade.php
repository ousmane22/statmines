<div>
    <div class="mt-1">
        @livewire('formulaire')
        @livewire('minier')
    </div>

        <div class="row">
            <div class="col">
                <div class="card mt-3">
                <div class="card-header bg-secondary text-white">
                    Information de l'entreprise {{ $entreprise->nom }} <strong>(NINEA=> {{ $entreprise->ninea }})</strong>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <div class="row">
                            <div class="col">
                            <li class="list-group-item"><strong>Nom Entreprise:</strong> <br> {{ $entreprise->nom }}</li>
                            <li class="list-group-item"><strong>NINEA:</strong> <br> {{ $entreprise->nom }}</li>
                            <li class="list-group-item"><strong>Nombre titre minier:</strong> <br> {{ $entreprise->nombretitre }}</li>
                            <li class="list-group-item"><strong>Nom du point focal:</strong> <br> {{ $entreprise->nomfocal }}</li>
                            <li class="list-group-item"><strong>Téléphone focal:</strong> <br> {{ $entreprise->phonefocal }}</li>
                        </div>

                            <div class="col">
                                <li class="list-group-item"><strong>Téléphone fixe:</strong> <br> {{ $entreprise->fixefocal }}</li>
                                <li class="list-group-item"><strong>Email focal:</strong> <br> {{ $entreprise->email }}</li>
                                <li class="list-group-item"><strong>Sociétés:</strong> <br> {{ $entreprise->societe }}</li>
                                <li class="list-group-item"><strong>Type Permis:</strong> <br> {{ $entreprise->typepermis->nom }}</li>
                                <li class="list-group-item"><strong>Type mines:</strong> <br> {{ $entreprise->typemines->nom }}</li>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>

        <div class="">
            <a wire:click.prevent="$emit('getEntrepriseId',{{ $entreprise->id }})" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#titreminier">
                <i class="fas fa-add"></i>+Titre Minier
             </a>
            <div class="card mt-2">
                <div class="card-header bg-secondary text-white">
                    Liste des titres miniers de l'entreprise <strong>( {{ $entreprise->nom }} )</strong>
                </div>
                <div class="card-body">
                <table class="table bordered" id="formulaires">
                        <thead>
                            <tr>
                                <th class="text-primary"><strong>Nom du périmétre</strong></th>
                                <th class="text-primary"><strong>Numéro du tire</strong></th>
                                <th class="text-primary"><strong>Nature du titre</strong></th>
                                <th class="text-primary"><strong>Région</strong></th>
                                <th class="text-primary"><strong>Date signature</strong></th>
                                <th class="text-primary"><strong>Voir</strong></th>

                          </tr>
                        </thead>
                    <tbody>
                       @foreach ($titreminier as $ef)
                            <tr>
                                <td>{{ $ef->nom }}</td>
                                <td>{{ $ef->numerotitre }}</td>
                                <td>{{ $ef->natureminier->nom }}</td>
                                <td>{{ $ef->region->nom }}</td>
                                <td>{{ $ef->datesignature }}</td>
                                <td>
                                    <a href="{{ route('minier.show',$ef->id) }}"><i class="fas fa-eye text-primary"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                 </table>
                </div>
            </div>
        </div>
    </div>


</div>

<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    <script>
            $(document).ready(function () {
            $('#formulaires').DataTable({
              pageLength:4,

            });
        });
    </script>
