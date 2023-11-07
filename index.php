<?php

// Classes

// Modèle sur lequel on va se baser afin d'instancier des objets

// Appeler un attribut => $objet->attribut
// Appeler une méthode => $objet->methode()

class Chat {
    
    public string $nom;
    
    public int $age;

    public ?string $race = null;

    public function miaou(): void 
    {
        echo "Miaou" ;
    }
}



$chat1 = new Chat();
$chat1->nom = "Gribouille";

echo "Nom : " . $chat1->nom;
echo "<br/>";
$chat1->miaou();
echo "<br/>";


//ne pas cloner avec $chat2 = $chat1 (copie conforme de l'objet)
$chat2 = clone $chat1;

$chat1->nom = "Georges";
echo "<pre>";
var_dump($chat1, $chat2);
echo "</pre>";

