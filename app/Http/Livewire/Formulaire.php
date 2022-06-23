<?php

namespace App\Http\Livewire;

use App\Models\Entreprise;
use App\Models\Formulaire as ModelsFormulaire;
use App\Models\Titreminier;
use Livewire\Component;

class Formulaire extends Component
{
    public $entreprise_id;
    public $typeformulaire_id;
    public $cycle_id;
    public $IDtitreminier;
    public $Nomtitre;
    public $entrepriseNINEA;




    protected $listeners = [

        'getTitreminierId'
    ];



    public function getTitreminierId(Titreminier $titreminier)
    {
        $this->IDtitreminier = $titreminier->id;
        $this->Nomtitre = $titreminier->nom;

    }



    public function render()
    {
        return view('livewire.entreprise.formulaire');
    }

    protected $rules = [
            'typeformulaire_id' => 'required',
            'cycle_id' => 'required',
            'titreminier_id' => 'required',


    ];

    public function storeFormulaire()
    {
        //$this->validate();
        $IDtitreminiers = $this->IDtitreminier;
        $formulaire = new ModelsFormulaire;
        $formulaire->typeformulaire_id = $this->typeformulaire_id;
        $formulaire->cycle_id = $this->cycle_id;
        $formulaire->titreminier_id = $this->IDtitreminier;
        $formulaire->save();
        session()->flash('success', 'Formulaire ajouté avec succès');
        return redirect(request()->header('Referer'));
    }



}
