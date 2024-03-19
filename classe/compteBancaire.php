<?php
class CompteBancaire {
    private string $typeContrat;
    private float $soldeInitial;
    private string $deviseMonetaire; 
    private Titulaire $titulaire;  

    public function __construct (string $typeContrat, float $soldeInitial, string $deviseMonetaire, Titulaire $titulaire){
     
    $this->typeContrat =$typeContrat;
    $this->soldeInitial =$soldeInitial;
    $this->deviseMonetaire =$deviseMonetaire;
    $this->titulaire =$titulaire;
    $titulaire->addcompteBancaire($this);

    }
    public function getTypeContrat(): string
    {
        return $this->typeContrat;
    }

    public function setTypeContrat(string $typeContrat): self
    {
        $this->typeContrat = $typeContrat;

        return $this;
    }

    public function getSoldeInitial(): float
    {
        return $this->soldeInitial;
    }

    public function setSoldeInitial(float $montant): self
    {
        $this->soldeInitial += $montant;

        return $this;
    }

    public function getDeviseMonetaire(): string
    {
        return $this->deviseMonetaire;
    }

    public function setDeviseMonetaire(string $deviseMonetaire): self
    {
        $this->deviseMonetaire = $deviseMonetaire;

        return $this;
    }

    public function getTitulaire(): Titulaire
    {
        return $this->titulaire;
    }

    public function setTitulaire(Titulaire $titulaire): self
    {
        $this->titulaire = $titulaire;

        return $this;
    }
    public function getInfos(){
        return $this->getTypeContrat()." ".$this->getSoldeInitial()." ".$this->getDeviseMonetaire()." ".$this->titulaire;
    }
    public function crediter(float $montant){
        $this->setSoldeInitial(+$montant);
        return "Créditer le compte de". " " .$montant." "."euros";
        }
    public function debiter (float $montant){
        $this->setSoldeInitial(-$montant);
        return "Débiter le compte de". " ".$montant." "."euros";
        }
    public function effectuerVirement ( CompteBancaire $compteBancaire2 ,float $montant){
        $this->soldeInitial-=$montant;
        $compteBancaire2->setSoldeInitial($montant);
        return "Effectuer un virement". " ".$montant." "."euros";
        }
        

}