<div>

    <div>
        <a href="" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-add"></i> Nouvelle Entreprise
        </a>
    </div>

    <!-- Formulaire Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" data-backdrop='static' data-keyboard='false' tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal-lg">
                <div class="modal-header bg-dark text-white">
                    <strong class="modal-title" id="exampleModalLabel">
                        Section A0 :IDENTIFICATION
                    </strong>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form wire:submit.prevent="store">

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">A0.1: Nom Entreprise</label>
                                    <input type="text" wire:model="nom" class="form-control">
                                    @error('nom')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">A0.2: NINEA</label>
                                    <input type="number" name="" id="" wire:model="ninea"
                                        class="form-control">
                                    @error('ninea')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">A0.3:Nombre de titres miniers</label>
                                    <input type="text" name="" id="" class="form-control"
                                        wire:model="nombretitre">
                                    @error('nombretitre')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">A0.4: Nom du point focal</label>
                                    <input type="text" name="" id="" class="form-control"
                                        wire:model="nomfocal">
                                    @error('nomfocal')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Type Mine</label>
                                    <select type="text" name="" id="" class="form-control"
                                        wire:model="typemine_id">
                                        <option value="">Selectionner</option>
                                        @foreach (App\Models\Typemines::all() as $typemines)
                                            <option value="{{ $typemines->id }}">{{ $typemines->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="col">

                                <div class="form-group">
                                    <label for="">A0.5: Téléphone fixe</label>
                                    <input type="number" name="" id="" class="form-control"
                                        wire:model="fixefocal">
                                    @error('fixefocal')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">A0.6: Téléphone cellulaire</label>
                                    <input type="number" name="" id="" class="form-control"
                                        wire:model="phonefocal">
                                    @error('phonefocal')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">A0.7: Email (point focal)</label>
                                    <input type="email" name="" id="" class="form-control"
                                        wire:model="email">
                                </div>

                                <div class="form-group">
                                    <label for="">A0.8: Site web de l'entreprise</label>
                                    <input type="text" name="" id="" class="form-control"
                                        wire:model="siteweb">
                                </div>



                                <div class="form-group">
                                    <label for="">Type Permis</label>
                                    <select type="text" name="" id="" class="form-control"
                                        wire:model="typepermi_id">
                                        <option value="">Selectionner</option>
                                        @foreach (App\Models\Typepermis::all() as $typepermis)
                                            <option value="{{ $typepermis->id }}">{{ $typepermis->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">A0.9: Liste des sociétes en joint-venture</label>
                            <textarea type="text" name="" id="" class="form-control" wire:model="societe"></textarea>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
