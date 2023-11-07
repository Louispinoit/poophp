<?php

$animalNom = "Gribouille";
$animalAge = 1;

function presentation (string $nom, int $age) {
    echo sprintf("Bonjour, je suis %s, j'ai %d an(s)", $nom, $age);
}

presentation($animalNom, $animalAge);