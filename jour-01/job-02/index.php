<?php

function my_str_reverse(string $string) : string {
    $reversedString = '';
    $i=0;

    //Parcours de la chaîne de caractères en sens inverse
    while (isset($string[$i])) {
        $i++;
    }

    //décrémenter $i pour pointer sur le dernier caractère
    $i--;

    //construction de la chaine inversée
    while ($i >= 0) {
        $reversedString .= $string[$i];
        $i--;
    }

    return $reversedString;
}

//exemple
$result = my_str_reverse('Hello');
// var_dump($result);
// echo "La chaîne inversée de 'Hello' est : $result";


?>