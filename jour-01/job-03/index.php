<?php

function my_is_multiple(int $divider, int $multiple) : bool {
    if ($divider === 0) {
        return false;
    }
    return $multiple % $divider === 0;
}

//Exemple d'utilisation de la fonction
$result = my_is_multiple(3, 9);
// var_dump($result);

?>