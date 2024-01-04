<?php

class CompteRemunere extends Compte {
    private $taux;

    function __construct($numero, $proprietaire, $solde, $taux)
    {
        parent::__construct($numero, $proprietaire, $solde);
        $this->taux = $taux;
    }


}

?>