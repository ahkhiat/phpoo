<?php

class Valeur {
    protected $nom;
    protected $prix;
    function __construct ($nom, $prix)
    {
        $this -> nom = $nom;
        $this -> prix = $prix;
    } 

    function getinfo() {
        $info ="<h4>Le prix de $this->nom est de $this->prix </h4>";
        return $info;
    }

}



?>