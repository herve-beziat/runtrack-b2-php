<?php
 
 function my_is_prime(int $number) : bool {
     if ($number < 2) {
         return false;
     }
     for ($i = 2; $i < $number; $i++) {
         if ($number % $i === 0) {
             return false;
         }
     }
     return true;
 }

//Exemple d'utilisation de la fonction
$result = my_is_prime(6);
// var_dump($result);

?>