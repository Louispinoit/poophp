<?php

// Classes

// Modèle sur lequel on va se baser afin d'instancier des objets

class Chat {
    
    public string $nom;
    
    public int $age;

    public ?string $race = null;

    public function miaou(): void 
    {
        echo "Miaou" ;
    }
}



$chat = new Chat();



