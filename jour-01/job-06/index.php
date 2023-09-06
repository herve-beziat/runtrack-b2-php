<?php

function my_array_sort(array $arrayToSort, string $order): array {
    $length = count($arrayToSort);
    
    if ($order === "ASC") {
        for ($i = 0; $i < $length - 1; $i++) {
            for ($j = 0; $j < $length - $i - 1; $j++) {
                if ($arrayToSort[$j] > $arrayToSort[$j + 1]) {
                    // Échange des éléments s'ils sont dans le mauvais ordre
                    $temp = $arrayToSort[$j];
                    $arrayToSort[$j] = $arrayToSort[$j + 1];
                    $arrayToSort[$j + 1] = $temp;
                }
            }
        }
    } elseif ($order === "DESC") {
        for ($i = 0; $i < $length - 1; $i++) {
            for ($j = 0; $j < $length - $i - 1; $j++) {
                if ($arrayToSort[$j] < $arrayToSort[$j + 1]) {
                    // Échange des éléments s'ils sont dans le mauvais ordre
                    $temp = $arrayToSort[$j];
                    $arrayToSort[$j] = $arrayToSort[$j + 1];
                    $arrayToSort[$j + 1] = $temp;
                }
            }
        }
    } else {
        // En cas de valeur incorrecte pour $order, renvoyer le tableau non modifié
        // Vous pouvez également générer une erreur ou une exception ici si nécessaire.
    }
    
    return $arrayToSort;
}

// Exemple d'utilisation :
$resultatCroissant = my_array_sort([2, 24, 12, 7, 34], "ASC");
$resultatDecroissant = my_array_sort([8, 5, 23, 89, 6, 10], "DESC");

// var_dump($resultatCroissant);
// var_dump($resultatDecroissant);




?>