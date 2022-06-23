<div>
    <div wire:ignore.self class="modal fade" id="titreminier" data-backdrop='static' data-keyboard='false' tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <strong class="modal-title" id="exampleModalLabel">
                    Nouveau formulaire
                </strong>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form wire:submit.prevent="saveTitreMinier">
                    <input type="text"  hidden  value="{{ $IDentreprise }}" wire:model="IDentreprise">
                    <div class="row">
                        <div class="col">
                                <div class="form-group">
                                <label for="">A1.1:Nom du périmétre:</label>
                                <input type="text" class="form-control"  wire:model="nomT">
                            </div>

                            <div class="form-group">
                                <label for="">A1.2:Numéro du titre minier:</label>
                                <input type="text" class="form-control" wire:model="numerotitre">
                            </div>


                            <div class="form-group">
                                <label for="">A1.6:Date de signature de la convention:</label>
                                <input type="date" class="form-control" wire:model="datesignature">
                            </div>

                            <div class="form-group">
                                <label for="">A1.7:Date d'octroi:</label>
                                <input type="date" class="form-control" wire:model="dateoctro">
                            </div>


                            <div class="form-group">
                                <label for="">A1.8:Montant de l'engagement des dépenses prévues (CFA):</label>
                                <input type="number" class="form-control" wire:model="montant">
                            </div>

                            <div class="form-group">
                                <label for="">A1.9:Superficie du titre minier(KM²):</label>
                                <input type="number" class="form-control" wire:model="superficieOctroye">
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="">A1.3:Nature du titre minier</label>
                                <select name="" id="" class="form-control" wire:model="natureminier_id">
                                    <option value="">Selectionner</option>
                                    @foreach (App\Models\Natureminier::all() as $minier )
                                    <option value="{{ $minier->id }}">{{ $minier->nom }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="">A1.4:Région</label>
                                <select wire:model="region_id" id="" class="form-control">
                                <option value="">Selectionner</option>
                                @foreach (App\Models\Region::all() as $rg )
                                    <option value="{{ $rg->id }}">{{ $rg->nom }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">A1.5:Substances associées à ce titre minier et les localisation</label>
                                <select wire:model="substance_id" id="" class="form-control">
                                    <option value="">Selectionner</option>
                                    @foreach (App\Models\Substance::all() as $sb )
                                    <option value="{{ $sb->id }}">{{ $sb->nom }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="">A1.10:Superficie exploitée(KM²):</label>
                                <input type="number" class="form-control" wire:model="superficieExploite">
                            </div>

                            <div class="form-group">
                                <label for="">A1.11:Superficie rendue(KM²):</label>
                                <input type="number" class="form-control" wire:model="superficieRendue">
                            </div>

                            <div class="form-group">
                                <label for="">A1.12:Superficie réhabilitée(KM²):</label>
                                <input type="number" class="form-control" wire:model="superficieRehabilite">
                            </div>

                        </div>
                        <button  class="btn btn-primary mt-2 text-white" type="submit">Enregitrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
