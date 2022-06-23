<div>
    @livewire('formulaire')
    @livewire('exploitation')


    <div>
        <button wire:click.prevent="$emit('getTitreminierId',{{ $titreminier->id }})" type="button"
            class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formulaire">
            <i class="fas fa-add"></i> Nouveau formulaire
        </button>
    </div>

    <div class="row">
        <div class="col-5">
            <div class="card mt-3">
                <div class="card-header bg-primary text-white">
                    Information du Titre Minier {{ $titreminier->nom }}
                    <strong>(Numero=> {{ $titreminier->numerotitre }})</strong>
                    <strong>Entreprise => ( {{ $titreminier->entreprise->nom }})</strong>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Nom du périmétre:</strong> <br> {{ $titreminier->nom }}
                        </li>
                        <li class="list-group-item"><strong>Numéro du titre:</strong> <br>
                            {{ $titreminier->numerotitre }}</li>
                        <li class="list-group-item"><strong>Nature:</strong> <br>
                            {{ $titreminier->natureminier->nom }}</li>
                        <li class="list-group-item"><strong>Région:</strong> <br> {{ $titreminier->region->nom }}</li>
                        <li class="list-group-item"><strong>Date signature:</strong> <br>
                            {{ $titreminier->datesignature }}</li>

                        <li class="list-group-item"><strong>Date Octroi:</strong> <br> {{ $titreminier->dateoctro }}
                        </li>
                        <li class="list-group-item"><strong>Dépense:</strong> <br> {{ $titreminier->montant }}</li>
                        <li class="list-group-item"><strong>Superficie Octroyée:</strong> <br>
                            {{ $titreminier->superficieOctroye }}</li>
                        <li class="list-group-item"><strong>Superficie Exploitée:</strong> <br>
                            {{ $titreminier->superficieExploite }}</li>
                        <li class="list-group-item"><strong>Superficie Réhabilitée:</strong> <br>
                            {{ $titreminier->superficieRehabilite }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-7 mt-3">
            <div class="card">
                <div class="card">
                    <div class="card-header bg-secondary text-white font-bold">
                        Liste des formulaire
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-primary"><strong>Cycle</strong></th>
                                    <th class="text-primary"><strong>Type Formulaire</strong></th>
                                    <th class="text-primary"><strong>Remplir</strong></th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($formulaire as $f)
                                    <tr>
                                        <td>{{ $f->cycle->label }}</td>
                                        <td>{{ $f->typeformulaire->nom }}</td>
                                        <td>
                                            <a type="button" wire:click="$emit('getFormulaireId',{{ $f->id }})" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exploitation">
                                                <i class="fas fa-add"></i>B1
                                            </a>
                                            <a type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="fas fa-add"></i>B1
                                            </a>
                                            <a type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="fas fa-add"></i>B1
                                            </a>
                                            <a type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="fas fa-add"></i>B1
                                            </a>
                                            <a type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="fas fa-add"></i>B1
                                            </a>
                                            <a type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="fas fa-add"></i>B1
                                            </a>
                                            <a type="button" class="btn btn-primary mt-1" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="fas fa-add"></i>B1
                                            </a>
                                            <a type="button" class="btn btn-primary mt-1" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="fas fa-add"></i>B1
                                            </a>
                                            <a type="button" class="btn btn-primary mt-1" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="fas fa-add"></i>B1
                                            </a>
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
</div>
