<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte</title>
</head>
<body>
    <h1>Compte</h1>
    
    <?php
    include("compte-anonyme.php");
    include("compte-remunere.php");

    class Compte {
        private $numero;
        private $proprietaire;
        protected $solde;
        function __construct ($numero, $proprietaire, $solde=0.0)
        {
            $this -> numero = $numero;
            $this -> proprietaire = $proprietaire;
            $this -> solde = $solde;
        } 

        function depot($montant) {
            $this -> solde += $montant;
        }

        function retrait($montant) {
            $this -> solde -= $montant;
        }

        function affiche() {
            echo "Compte n° " . $this-> numero . "," . " Proriétaire : " . $this-> proprietaire . "," . " Solde = " . $this -> solde . " €";
        }
        function getNumero() {
            return $this -> numero;
        }
        function getSolde() {
            return $this -> solde;
        }

    }

    // class CompteAnonyme extends Compte 
    //     {
    //     function __construct($numero, $solde)
    //         {
    //             parent::__construct($numero, $solde);
    //             // $this -> numero = $numero;
    //             // $this -> solde = $solde;
    //         }
    //     function affiche() 
    //         {
    //             echo "Compte anonyme n° " . $this->numero . "," . " Solde = " . $this->solde . " €";
    //         }

    //     }

    // class CompteRemunere extends Compte {
       
    //     function depot($montant) {
    //         $this -> solde = $solde * (1 + (2/100)*($j/365));
    //     }
        // function retrait($montant){

        // }
        // function affiche($montant){

        // }
    // }


    ?>

</body>
</html>