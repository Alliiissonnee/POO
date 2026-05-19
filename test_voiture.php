<?php
    require_once("Voiture.php");

    /* 
        A partir de la classe je crée désormais ce qu'on appelle des objets
        Objet : nouvelle instance de classe
    */
    $voiture1=new Voiture("DS 3","Citroën",220000,"Diesel");
    $voiture2=new Voiture("911","Porsche",50000,"Essence");
    $voiture3=new Voiture("E-tron","Audi",20000,"Electrique");

    /* Propriété privée non accessible, il faut passer par le getter */
    print $voiture1->brand;

    /* tableau d'objets (collection d'objets) */
    $voitures=array($voiture1,$voiture2,$voiture3);

    print $voiture1->getNbkms();
    print PHP_EOL;
    $voiture1->rouler(126);
    print $voiture1->getNbkms();
    print PHP_EOL;
    /* Parcours de la collection avec foreach */
    foreach($voitures as $voiture) {
        print $voiture->getNbkms();
        print PHP_EOL;
    }

?>