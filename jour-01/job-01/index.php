<?php

function my_str_search(string $haystack, string $needle) : int {
//initialiser un compteur
$count=0;

//Parcourir chaque caractère de la chaîne haystack
for ($i =0; isset($haystack[$i]); $i++) {
    //check si le caractère courant correspond à $needle
    if ($haystack[$i] === $needle) {
        //si c'est vrai alors augmenter le compteur
        $count++;
    }
}

//return le nombre d'occurences
return $count;

}

//exemple
$result = my_str_search('La Plateforme', 'a');
// echo "Le nombre d'occurences de 'a' dans 'La Plateforme' est : $result";

?>