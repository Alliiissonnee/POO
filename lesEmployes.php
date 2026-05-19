 <?php
    require_once("poo.php");
    require_once("agence.php");
    require_once("lesSalesGosses.php");
    require_once("director.php");

    $agence1 = new Agence("The Main Agence", "66 rue des foncés", 83460, "Les Arcs", "Restaurant d'entreprise");
    $agence2 = new Agence("The 2nd Agence", "13 rue de Pablo-Picasso", 79000, "Niort", "Ticket restaurant");

    $enfant1 = new Enfants("Maëlan", "29/05/2020");
    $enfant2 = new Enfants("Bernardo", "23/03/2025");
    $enfant3 = new Enfants("Maria", "12/11/2023");
    $enfant4 = new Enfants("Pedro", "06/01/2022");
    $enfant5 = new Enfants("Thiago", "20/06/2013");
    $enfant6 = new Enfants("Anna", "18/08/2012");
    $enfant7 = new Enfants("Arthur", "25/09/2009");

    $enfants = [$enfant1, $enfant2, $enfant3, $enfant4, $enfant5, $enfant6, $enfant7];
 
    $employe1 = new Employe("Wattrelot","Maxence","01/12/2015","CEO","130k","Ressources humaines", $agence2, [$enfant6, $enfant7]);
    $employe2 = new Employe("Nogueira De Souza","Wallace","15/04/2016","Comptable", "57k", "Comptabilité", $agence2, [$enfant2, $enfant3, $enfant4, $enfant5]);
    $employe3 = new Employe("Lombaard","Reinier","10/03/2016","Secretaire", "52k", "Ressources humaines", $agence1, []);
    $employe4 = new Employe("Gublin","Caroline", "22/10/2019", "RRH", "62k", "Ressources humaines", $agence2, []);
    $employe5 = new Employe("Thiebaut", "Davy", "23/03/2026", "Developpeur Web Junior", "38k", "IT", $agence1, [$enfant1]);

    $director = new Director("Lesaint", "Jérôme", "13/05/2002", "Big Head Director", "250k", "Head", $agence1, []);

    $employes = array($employe1, $employe2, $employe3, $employe4, $employe5);
    $dateJourPrime = "30/11";

    foreach ($employes as $employe){
        echo "Nom de l'employé : " .$employe->getNom();
        echo " " .$employe->getPrenom() .PHP_EOL;
        echo "Agence de l'employé : " .$employe->getAgence()->getNomAgence()."." .PHP_EOL;
        echo "Mode de restauration de l'employé : " .$employe->getAgence()->getmodeResto()."." .PHP_EOL;
        echo "Ancienneté : " .$employe->calculAnciennete() ." ans." .PHP_EOL;
        echo "Salaire annuel : " .$employe->salaire() ."€" .PHP_EOL;
        echo "Prime annuelle : " .$employe->primeAnnuelle() ."€" .PHP_EOL;
        echo "Prime d'ancienneté : " .$employe->primeAnciennete() ."€" .PHP_EOL;
        if ($employe->dateVersementPrime($dateJourPrime) == true){
            echo "La prime annuelle est versée ce jour :) :p :) les comptes en banques des employés pour un montant de : " .($employe->primeAnciennete()+$employe->primeAnnuelle()) ."€"  .PHP_EOL;
        } else {
            print "La prime annuelle n'est pas versé aujourd'hui :( ".PHP_EOL;
        }
        echo "Cheques vacances : " .$employe->chequesVacances()."." .PHP_EOL;
        
        echo "Les enfants de l'employé : ".PHP_EOL;


        
        if (empty($employe->getEnfants())){
            echo "Néant. Pas de chèque de Noël.";
            echo PHP_EOL;
        } else if ($employe->getEnfants()){
            foreach ($employe->getEnfants() as $gosses){
            echo "- " .$gosses->getprenomEnfant().": " .$gosses->DatedeNaissance() ." ans.";
            if ($gosses->DatedeNaissance() <= 10){
                echo " Chèque de Noël de 20€.";
                echo PHP_EOL;
            } else if ($gosses->DatedeNaissance() <= 15){
                echo " Chèque de Noël de 30€.";
                echo PHP_EOL;
            } else if ($gosses->DatedeNaissance() <= 18){
                echo " Chèque de Noël de 50€.";
                echo PHP_EOL;
            } else {
                echo " Pas de chèque de Noël.";
                echo PHP_EOL;
            }
        }
        }
        echo PHP_EOL;
        
    }
// Nb d'employé dans l'entreprise :
    $sommeDesEmployes = count($employes);
    echo "Il y a " .$sommeDesEmployes ." employés dans l'entreprise.";
    echo PHP_EOL;
// Tri par ordre alphabetique des services des employés :
   usort($employes, function($a,$b) {
        $serviceCompare = strcasecmp($a->getService(), $b->getService());
        if ($serviceCompare !== 0) {
            return $serviceCompare;
        }
        return strcasecmp($a->getNom(), $b->getNom());
    });

    $masseSalariale = 0;
    foreach ($employes as $employe){
        echo $employe->getService() . ' ' .$employe->getNom(). ' ' .$employe->getPrenom() .PHP_EOL;
        $masseSalariale += $employe->salaireTotal();
    }
echo PHP_EOL;
echo "La masse salariale totale (salaires + primes) : " .$masseSalariale ."€" .PHP_EOL;
echo PHP_EOL;

echo "Nom du directeur : " .$director->getNom() ." " .$director->getPrenom() .PHP_EOL;
echo "Ancienneté : " .$director->calculAnciennete() ." ans." .PHP_EOL;
echo "Salaire annuel : " .$director->salaire() ."€".PHP_EOL;
echo "Prime annuelle : " .$director->primeAnnuelle() ."€" .PHP_EOL;
echo "Prime d'ancienneté : " .$director->primeAnciennete() ."€" .PHP_EOL;
if ($employe->dateVersementPrime($dateJourPrime) == true){
            echo "La prime annuelle est versée ce jour :) :p :) les comptes en banques des employés pour un montant de : " .($employe->primeAnciennete()+$employe->primeAnnuelle()) ."€"  .PHP_EOL;
        } else {
            print "La prime annuelle n'est pas versé aujourd'hui :( ".PHP_EOL;
        }
echo PHP_EOL;
    

?>