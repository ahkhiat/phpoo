<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Visiteurs</title>
</head>
<body>

    <h1>Classe Visiteurs</h1>
    
    <?php
        
        class Visiteur // déclaration de la classe
            {
            private $nom; // déclaration des attributs
            private $motdepasse ; 
            public $age;
            public $derniereVisite ; 
            private static $compteur=0;
                function __construct ($nom, $motdepasse, $age) // constructeur Visiteur(…) 
                    {   $this-> nom = $nom;
                        $this-> motdepasse = $motdepasse;
                        $this -> age = $age;
                        $this-> derniereVisite = time();
                        self::$compteur++;
                    } 
            

                function get_derniereVisite() 
                    {
                        return (date("M d Y", $this->derniereVisite));
                    }
                    // modifier le nom du visiteur
                function set_nom($nom) 
                    {
                        $this->nom = $nom;
                    } 
                function get_nom()
                {
                    return $this->nom;
                }
                static function get_compteur()
                {
                    return self::$compteur;
                }

            }

    $visiteur1 = new Visiteur ("Thierry", "MdP", 42);
    echo "le nom du visiteur est :" .$visiteur1 -> get_nom() . "<br>";

    $visiteur1 -> set_nom("Sabri");
    echo "le nom du visiteur est :" .$visiteur1 -> get_nom() . "<br>";

    $visiteur2 = new Visiteur ("Nadia", "mdpNadia", 40);
    echo "le nom de visiteur2 est : " .$visiteur2 -> get_nom() . "<br>";
    echo "l'age de visiteur2 est : " .$visiteur2 -> age . "<br>";
    echo "le compteur indique : " .Visiteur::get_compteur() . "<br>";

    $visiteur3 = new Visiteur ("Mustapha", "mdp", 38);
    echo "le nom de visiteur 3 est : " .$visiteur3 -> get_nom() . "<br>";
    echo "le compteur indique : " .Visiteur::get_compteur();




    ?>

</body>
</html>