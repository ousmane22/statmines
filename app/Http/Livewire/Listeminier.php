<?php

namespace App\Http\Livewire;

use App\Models\Entreprise;
use App\Models\Formulaire;
use App\Models\Titreminier;
use Livewire\Component;

class Listeminier extends Component
{
    public Titreminier $titreminier;
    public $formulaire;

    protected $listeners = [
        'getTitreminierId',
        'getFormulaireId'
    ];

    public function getFormulaireId()
    {
    }

    public function render()
    {
        $titreID = $this->titreminier->id;
        $this->formulaire = Formulaire::where('titreminier_id', $titreID)
            ->get();
        return view('livewire.minier.listeminier');
    }

    public function getTitreminierId()
    {

    }


}
