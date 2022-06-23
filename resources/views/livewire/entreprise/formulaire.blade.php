<div>
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
  <div wire:ignore.self class="modal fade" id="formulaire" data-backdrop='static' data-keyboard='false' tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <strong class="modal-title" id="exampleModalLabel">
                        Nouveau formulaire Titre Minier => ({{  $Nomtitre  }})
                    </strong>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form wire:submit.prevent="storeFormulaire">
                            <div class="form-group">
                                {{-- <label for="">Entreprise concernée</label><br> --}}
                                {{-- <strong>{{ $NOMEntreprise }} ({{ $entrepriseNINEA }})</strong> --}}
                                <input type="text" hidden readonly  id="" class="form-control" wire:model="IDtitreminier" value="{{  $IDtitreminier  }}">

                            </div>

                            <div class="form-group">
                                <label for="">Cycle</label>
                                <select  name="" id="" class="form-control" wire:model="cycle_id">
                                       <option value="">Selectionner</option>
                                        @foreach (App\Models\Cycle::all() as $cycle )
                                        <option value="{{ $cycle->id }}">{{ $cycle->label }}</option>
                                        @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="">Type Formulaire</label>
                                <select class="form-control" wire:model="typeformulaire_id">
                                    <option value="">Selectionner</option>
                                    @foreach (App\Models\TypeFormulaire::all() as $typeformulaire )
                                    <option value="{{ $typeformulaire->id }}">{{ $typeformulaire->nom }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
  </div>
</div>


