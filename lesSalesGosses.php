<?php
class Enfants {

private $prenomEnfant;
private $datedeNaissance;

public function __construct($prenomEnfant, $datedeNaissance){
        $this->prenomEnfant = $prenomEnfant;
        $this->datedeNaissance = $datedeNaissance;

    }
    public function getprenomEnfant() {return $this->prenomEnfant;}
    public function setprenomEnfant($prenomEnfant) {$this->prenomEnfant = $prenomEnfant;}
     public function getdatedeNaissance() {return $this->datedeNaissance;}
     public function setdatedeNaissance($datedeNaissance) {$this->datedeNaissance = $datedeNaissance;}


public function DatedeNaissance() {
    $date1 = new DateTime();
    $date2 = DateTime::createFromFormat("d/m/Y", $this->datedeNaissance);

    if ($date2) {
        $this->age = $date1->diff($date2)->y;
    }

    return $this->age;
}

}

?>