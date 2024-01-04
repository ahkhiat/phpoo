<?php


class CompteAnonyme extends Compte {
    function __construct($numero, $solde)
    {
        parent::__construct($numero, "Anonyme", $solde);
        
    }
    function affiche () {
        echo "Compte anonyme n° " . $this->getNumero() . "," . " Solde = " . $this->solde . " €";
    }

}

?>