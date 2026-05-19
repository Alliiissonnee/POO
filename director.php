<?php

class Director extends Employe {

    public function primeAnnuelle(){
        $primeAnnuelle = ((7*$this->salaireEntier)/100);
        return $primeAnnuelle;
    }

    public function primeAnciennete(){
        $primeAnciennete = ((3*$this->salaireEntier)/100)*$this->anciennete;
        return $primeAnciennete;
    }

}


?>