<?php
class Titulaire {
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance; 
    private string $ville;
    private array $compteBancaires; 

    public function __construct (string $nom, string $prenom, string $dateNaissance, string $ville){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->ville = $ville;
        $this->compteBancaires = [];
    
    }
    
    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): DateTime
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(DateTime $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getVille(): string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCompteBancaires(): array
    {
        return $this->compteBancaires;
    }

    public function setCompteBancaires(array $compteBancaires): self
    {
        $this->compteBancaires = $compteBancaires;

        return $this;
    }
    
    public function addcompteBancaire($compteBancaire){
        $this->compteBancaires[]= $compteBancaire;

    }

    public function getAge(){
        $newdate = new DateTime("19-03-2024");
        $age = $this->dateNaissance ->diff($newdate);

        return $age->y;
    }

    
    
    public function getInfos(){
        $resultat= $this." ".$this->getAge()." ".$this->getVille();
        foreach ($this->compteBancaires as $compteBancaire) {
            $resultat .= $compteBancaire->getTypeContrat()."  " ;
        }
        return $resultat;
    }

    public function __toString(){
        return $this->nom." ".$this->prenom;
    }
}