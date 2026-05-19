<?php

class Employe {

private $nom;
private $prenom;
private $datedEmbauche;
private $poste;
private $salaire;
private $service;
private Agence $agence;
private array $enfants;

public function __construct($nom, $prenom, $datedEmbauche, $poste, $salaire, $service, Agence $agence, array $enfants = []){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->datedEmbauche = $datedEmbauche;
        $this->poste = $poste;
        $this->salaire = $salaire;
        $this->service = $service;
        $this->agence = $agence;
        $this->enfants = $enfants;
    }

public function calculAnciennete()
{
    $date1 = new DateTime();
    $date2 = DateTime::createFromFormat("d/m/Y", $this->datedEmbauche);

    if ($date2) {
        $this->anciennete = $date1->diff($date2)->y;
    }

    return $this->anciennete;
}

    public function getNom() {return $this->nom;}
    public function setNom($nom) {$this->nom=$nom;}
     public function getPrenom() {return $this->prenom;}
     public function setPrenom($prenom) {$this->prenom = $prenom;}
    public function getDatedEmbauche() {return $this->datedEmbauche;}
    public function setDatedEmbauche($datedEmbauche) {$this->datedEmbauche = $datedEmbauche;}
     public function getPoste() {return $this->poste;}
     public function setPoste($poste) {$this->poste = $poste;}
    public function getSalaire() {return $this->salaire;}
    public function setSalaire($salaire) {$this->poste = $poste;}
     public function getService() {return $this->service;}
     public function setService($service) {$this->service = $service;}  
    public function getAgence() {return $this->agence;}
    public function setAgence(Agence $agence) {$this->agence = $agence;}  
     public function getEnfants() {return $this->enfants;}
     public function setEnfants(array $enfants = []) {$this->enfants = $enfants;} 


    public function salaire(){
        $this->salaireEntier = (int)str_replace("k", "000", $this->salaire);
        return $this->salaireEntier;
    }

    public function primeAnnuelle(){
        $primeAnnuelle = ((5*$this->salaireEntier)/100);
        return $primeAnnuelle;
    }

    public function primeAnciennete(){
        $primeAnciennete = ((2*$this->salaireEntier)/100)*$this->anciennete;
        return $primeAnciennete;
    }

public function dateVersementPrime($dateVersementPrime){
    $dateJourPrime = date("d/m");
    if ($dateJourPrime == $dateVersementPrime){
        return true;
    } else {
    return false;
    }
}

public function salaireTotal(){
        return $this->salaire() + $this->primeAnnuelle() + $this->primeAnciennete();
    }

public function chequesVacances(){

    if ($this->anciennete>1){
        return "Oui";
    } else {
        return "Non";
    }
}


}


?>