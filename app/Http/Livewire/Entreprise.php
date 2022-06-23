<?php

namespace App\Http\Livewire;

use App\Models\Entreprise as ModelsEntreprise;
use App\Models\Formulaire;
use App\Models\Typemines;
use App\Models\Typepermis;
use Livewire\Component;

class Entreprise extends Component
{
    public $nom;
    public $ninea;
    public $nombretitre;
    public $nomfocal;
    public $phonefocal;
    public $fixefocal;
    public $email;
    public $siteweb;
    public $typemine_id;
    public $typepermi_id;
    public $societe = [];
    public $formulaireId;
    public  $entrepriseId;
    public $entreprise;
    public $idEntreprise;
    public $entrepriseAdd = false;



   public function mount()
   {

         $this->entreprise = ModelsEntreprise::all();
   }

   public $listeners = [
       'show',
       'getEntrepriseId'
   ];


    protected $rules = [
        'nom' => 'required|unique:entreprises',
        'ninea' => 'required|max:9|min:9|unique:entreprises',
        'nombretitre' => 'required',
        'nomfocal' => 'required',
        'phonefocal' => 'required|max:9|min:9',
        'fixefocal' => 'required|max:9|min:9',
    ];
    protected $messages = [
        'nom.required' => 'Le champ nom entreprise est requis',
        'ninea.required' => 'Le champ NINEA est requis',
        'nombretitre.required' => 'Le nombre de titres miniers est requis',
        'nomfocal.required' => 'Le champ nom point focal est requis',
        'phonefocal.required' => 'Le champ téléphone focal est requis',
        'fixefocal.required' => 'Le champ téléphone fixe focal est requis',

    ];



    public function render()
    {
        $typemine = Typemines::all();
        $typepermi = Typepermis::all();

        return view('livewire.entreprise.entreprise', compact('typemine', 'typepermi'));
    }





    public function store()
    {
        $validateData = $this->validate();
        $entreprise = new ModelsEntreprise;

        $entreprise->nom = $this->nom;
        $entreprise->ninea = $this->ninea;
        $entreprise->nombretitre = $this->nombretitre;
        $entreprise->nomfocal = $this->nomfocal;
        $entreprise->phonefocal = $this->phonefocal;
        $entreprise->fixefocal = $this->fixefocal;
        $entreprise->email = $this->email;
        $entreprise->siteweb = $this->siteweb;
        $entreprise->typemine_id = $this->typemine_id;
        $entreprise->typepermi_id = $this->typepermi_id;
        $entreprise->societe = $this->societe;

        $entreprise->save();

        session()->flash('success', 'Entreprise ajoutée');
        return redirect('/entreprise');
    }






}
