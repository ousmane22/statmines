<?php

namespace App\Http\Livewire;

use App\Models\Entreprise;
use App\Models\Formulaire;
use App\Models\Titreminier;
use Livewire\Component;

class Minier extends Component
{
    public $IDentreprise;
    //fields
    public $nomT;
    public $numerotitre;
    public $natureminier;
    public $natureminier_id;
    public $formulaire_id;
    public $region_id;
    public $substance_id;
    public $datesignature;
    public $dateoctro;
    public  $superficieOctroye;
    public $montant;
    public $superficieExploite;
    public $superficieRendue;
    public $superficieRehabilite;

    protected $listeners = [
        'getEntrepriseId'
    ];



    public function getEntrepriseId(Entreprise $entreprise)
    {
        $this->IDentreprise = $entreprise->id;

    }


    public function render()
    {
        return view('livewire.minier.minier');
    }


    protected $rules = [
        'numerotitre' => 'required',
        'natureminier' => 'required',

    ];

    public function saveTitreMinier()
    {
        $titreminier = new  Titreminier;
        $titreminier->nom = $this->nomT;
        $titreminier->numerotitre = $this->numerotitre;
        $titreminier->natureminier_id = $this->natureminier_id;
        $titreminier->entreprise_id = $this->IDentreprise;
        $titreminier->region_id = $this->region_id;
        $titreminier->substance_id = $this->substance_id;
        $titreminier->datesignature = $this->datesignature;
        $titreminier->dateoctro = $this->dateoctro;
        $titreminier->montant = $this->montant;
        $titreminier->superficieOctroye = $this->superficieOctroye;
        $titreminier->superficieExploite= $this->superficieExploite;
        $titreminier->superficieRendue = $this->superficieRendue;
        $titreminier->superficieRehabilite = $this->superficieRehabilite;
        $titreminier->save();

        session()->flash('success', 'Formulaire A1 ajouté avec succès');
        //return redirect()->back();
        return redirect(request()->header('Referer'));
    }
}
