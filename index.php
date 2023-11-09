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

// class Chat {

//     //Attributs de classe
//     public static int $nbChats = 0;
    
//     //Constante de classe 
//     public const AGE_MINIMUM = 2;
    
//     public string $nom;
    
//     public int $age;

//     public ?string $race = null;

//     //Methode magique
//     public function __construct(string $nom, int $age, ?string $race = null)
//     {
//         $this->nom = $nom;
//         $this->age = $age;
//         $this->race = $race;
//         self::$nbChats++;
//     }

//     public function miaou(): void 
//     {
//         echo "Miaou" ;
//     }

//     public static function inEnglish(): string
//     {
//         return "Cat";
//     }

// }


// $nomChat = "Gribouille";

// $chat1 = new Chat($nomChat, 2 , "Siamois");
// $chat2 = new Chat("Felix", 1);

// echo Chat::$nbChats;
// echo Chat::inEnglish();


// class Livre
// {
//     public string $titre;

//     public string $auteur;

//     public int $prix;

//     public function __construct(string $titre, string $auteur, int $prix)
//     {
//         $this->titre = $titre;
//         $this->auteur = $auteur;
//         $this->prix = $prix;
//     }

//     public function afficher(): void
//     {
//         echo sprintf("Le livre %s écrit par %s coûte %d euros.", $this->titre, $this->auteur, $this->prix);
//     }
// }

// $titre = "Le seigneur des anneaux";
// $auteur = "J.R.R Tolkien";
// $prix = 20;

// $livre1 = new Livre($titre, $auteur, $prix);

// $livre1->afficher();

// class Employe
// {
//     public string $matricule ;

//     public string $nom ;

//     public string $prenom ;
    
//     public \DateTime $dateNaissance;

//     public \DateTime $dateEmbauche;

//     public int $salaire ;



//     public function __construct(string $matricule, string $nom, string $prenom, DateTime $dateNaissance, DateTime $dateEmbauche , int $salaire)
//     {
//         $this->matricule = $matricule;
//         $this->nom = $nom;
//         $this->prenom = $prenom;
//         $this->dateNaissance = $dateNaissance ;
//         $this->dateEmbauche = $dateEmbauche;
//         $this->salaire = $salaire;
//     }

//     private function getAge() 
//     {


//         $today = new DateTime();

//        return ($today->diff($this->dateNaissance))->y;


//     }

//     private function dateAnciennete() 
//     {


//         $today = new DateTime();

//        return ($today->diff($this->dateEmbauche))->y;


//     }

//     private function augmentationSalaire(): string
//     {

//         $this->salaire += match (true) {
//             $this->dateAnciennete() < 5 => $this->salaire * 0.02,
//             $this->dateAnciennete() < 10 => $this->salaire*0.05,
//             default => $this->salaire*0.10
//         };

//         return $this->salaire;
//     }

//     public function afficher(): void
//     {
//         $h = sprintf("Matricule : %s <br> Nom : %s <br> Prénom : %s <br> Age : %d <br> Salaire : %d <br> Ancienneté : %d <br> Salaire après augmentation : %d", $this->matricule, $this->nom, $this->prenom, $this->getAge(), $this->salaire, $this->dateAnciennete(), $this->augmentationSalaire());
//         echo $h;
//     }

//     public function getFullName(): string
//     {
//         return strtoupper($this->nom) . " " . $this->prenom;
//     }
// }

// $employer = new Employe("123456", "Dupont", "Jean", new DateTime("1998/01/01"), new DateTime("2010/01/01"), 1550.85);

// echo $employer->afficher();
// echo "<br>";
// echo $employer->getFullName();

class Cercle
{
    public Point $centre;
    public float $rayon;
    
    public function __construct(Point $centre, float $rayon)
    {
        $this->centre = $centre;
        $this->rayon = $rayon;
    }

    public function getPerimetre(): float
    {
        return number_format( 2 * pi() * $this->rayon, 2);
    }

    public function getAire(): float
    {
        return number_format( pi() * pow($this->rayon, 2), 2);
    }

    public function appartient(Point $point): bool
    {
        $distance = sqrt(pow($point->x - $this->centre->x, 2) + pow($point->y - $this->centre->y, 2));
        return $distance <= $this->rayon;
    }

    public function afficher(): void
    {
        echo sprintf("Cercle de centre (%f, %f) et de rayon %f", $this->centre->x, $this->centre->y, $this->rayon);
    }
}

class Point
{
    public float $x;
    public float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y; 
    }

    public function afficher(): void
    {
        echo sprintf("Coordonnées : x = %f, y = %f", $this->x, $this->y);
    }
}

$centre = new Point(1, 2);
$rayon = 5;
$cercle = new Cercle($centre, $rayon);

$cercle->afficher();
echo "<br>";
echo sprintf("Périmètre : %f", $cercle->getPerimetre());
echo "<br>";
echo sprintf("Aire : %f", $cercle->getAire());
echo "<br>";
$point = new Point(2, 3);
echo sprintf("Le point (%f, %f) appartient au cercle : %s", $point->x, $point->y, $cercle->appartient($point) ? "oui" : "non");