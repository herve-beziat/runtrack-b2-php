<?php

function my_clossest_to_zero(array $array) : int {
    $closest = $array[0];
    foreach ($array as $value) {
        if (abs($value) < abs($closest)) {
            $closest = $value;
        }
    }
    return $closest;
}

//Exemple d'utilisation de la fonction
$result = my_clossest_to_zero([2, -1, 5, 23, 21,9]);
// var_dump($result);

?>