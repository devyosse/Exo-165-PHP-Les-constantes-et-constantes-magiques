<?php

/**
 * 1. Créez une constante contenant le nombre 12
 * 2. Créez une deuxième constante qui contient le nombre 2
 * 3. Affichez le résultat de la première constante multipliée par la deuxième constante
 * 4. Créez une constante contenant la chaîne: C'est cool PHP
 * 5. Calculez le résultat de la première constante additionnée de la deuxième constante, le tout multiplié par la
 *    longueur de la chaîne de la troisième constante ( attention aux priorités )
 */
// TODO Votre code ici.
define('SUPER_NOMBRE', 12);
define('MON_NOMBRE', 2);

echo SUPER_NOMBRE * MON_NOMBRE . "<br>";

define('MA_CHAINE', "C'est cool PHP");

echo (SUPER_NOMBRE + MON_NOMBRE) * strlen(MA_CHAINE) . "<br>";
/**
 * 6. Utilisez la bonne constante magique et éventuellement la bonne fonction pour afficher un maximum d'informations sur la page actuelle4
 */
// TODO Votre code ici.
echo "Le chemin absolu de ce fichier est: " . __FILE__;