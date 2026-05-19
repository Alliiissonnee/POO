  <?php
class Agence {

    private $nomAgence;
    private $adresseAgence;
    private $codePostal;
    private $villeAgence;
    private $modeResto;

    public function __construct($nomAgence, $adresseAgence, $codePostal, $villeAgence, $modeResto){
        $this->nomAgence = $nomAgence;
        $this->adresseAgence = $adresseAgence;
        $this->codePostal = $codePostal;
        $this->villeAgence = $villeAgence;
        $this->modeResto = $modeResto;
    }
    public function getNomAgence() {return $this->nomAgence;}
    public function setNomAgence($nomAgence) {$this->nomAgence = $nomAgence;}
     public function getAdresseAgence() {return $this->adresseAgence;}
     public function setAdresseAgence($adresseAgence) {$this->adresseAgence = $adresseAgence;}
    public function getcodePostal() {return $this->codePostal;}
    public function setcodePostal($codePostal) {$this->codePostal = $codePostal;}
     public function getvilleAgence() {return $this->villeAgence;}
     public function setvilleAgence($villeAgence) {$this->villeAgence = $villeAgence;}
    public function getmodeResto() {return $this->modeResto;}
    public function setmodeResto($modeResto) {$this->modeResto = $modeResto;}



}


?>