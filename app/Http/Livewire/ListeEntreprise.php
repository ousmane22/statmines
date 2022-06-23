<?php

namespace App\Http\Livewire;

use App\Models\Entreprise as ModelsEntreprise;
use App\Models\Formulaire;
use App\Models\Titreminier;
use League\CommonMark\Extension\CommonMark\Parser\Inline\EntityParser;
use Livewire\Component;

class ListeEntreprise extends Component
{
    public ModelsEntreprise $entreprise;
    public $titreminier;
    public $a = 0;
    public $entrepriseID;
    public $formulaireID;


    protected $listeners = [
            'getEntrepriseId',
            'getFormId'
    ];

    public function getEntrepriseId(ModelsEntreprise $entreprise)
    {
        $this->entrepriseID = $entreprise->id;
    }

    public function getFormId(Formulaire $formulaire)
    {
        $this->formulaireID = $formulaire->id;

    }

    public function render()
    {
        $idE = $this->entreprise->id;
        $this->titreminier = Titreminier::where('entreprise_id',$idE)
        ->orderBy('created_at','DESC')
          ->get();
        return view('livewire.entreprise.liste-entreprise');


    }






}
