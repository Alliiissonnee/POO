<?php

class Voiture {

    /*
        Propriétés: Caractéristiques de l'objet


        Portée, visibilité d'une variable (private, public,...)
    */
    private $model;
    private $brand;
    private $nbkms;
    private $carburant;

    /* Fonction d'initialisation (constructeur)
    on établit ici les données, caractéristiques essentielles de l'objet */
    public function __construct($model,$brand,$nbkms,$carburant) {
        $this->model=$model;
        $this->brand=$brand;
        $this->nbkms=$nbkms;
        $this->carburant=$carburant;

    }

    /* A partir d'ici nous avons les méthodes de l'objet */

    /* Les accesseurs : Getters et les Setters
    Getter c'est pour lire une information précise
    Setter c'est pour modifier une information précise
    */

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model=$model;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function getNbkms() {
        return $this->nbkms;
    }

    public function setNbkms($nbkms) {
        $this->nbkms = $nbkms;
    }

    public function getCarburant() {
        return $this->carburant;
    }

    public function setCarburant($carburant) {
        $this->carburant = $carburant;
    }

    /* D'autres fonctions permettant de gérer les actions de l'objet */
    public function rouler($nbkmsparcourus) {
        $this->nbkms+=$nbkmsparcourus;
    }
}

?>