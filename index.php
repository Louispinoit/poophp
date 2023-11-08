<?php

// Classes

// Modèle sur lequel on va se baser afin d'instancier des objets

// Appeler un attribut => $objet->attribut
// Appeler une méthode => $objet->methode()

// Modificateur de visibilité
// 1 - public (modifier / acceder depuis n'importe où<)
// 2 - private (modifier / acceder un attribut uniquement depuis la classe.)
// 3 - protected (permet de modifier / acceder depuis la classe et classe enfant. )
// => permet d'éviter les erreurs sur le long terme.
// => sert à l'encapsulation

// Contructeur => Permet de faire des actions lors de l'instanciation de la classe.

class Chat {

    

    //constante de classe 
    public const AGE_MINIMUM = 1;
    
    public string $nom;
    
    public int $age;

    public ?string $race = null;

    //Methode magique
    public function __construct(string $nom)
    {
        var_dump($this);
    }

    public function miaou(): void 
    {
        echo "Miaou" ;
    }

  
}


$nomChat = "Gribouille";

$chat1 = new Chat($nomChat);





//ne pas cloner avec $chat2 = $chat1 (copie conforme de l'objet)
$chat2 = clone $chat1;

$chat1->nom = "Georges";
echo "<pre>";
var_dump($chat1, $chat2);
echo "</pre>";
echo Chat::AGE_MINIMUM;

