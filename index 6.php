<?php

/*Les tableaux en php*/ 

/*Il y a deux syntaxes différentes permettant d’initialiser, c’est-à-dire de créer, un tableau vide */

/*
$firstArray = array(); # création d'un tableau sans aucune valeur
$secondArray = []; # deuxième syntaxe d'un tableau sans valeur 
*/

/*
$firstArray = array("cle1" => "element1", "cle2" => "element2", "cle3" => "element3");
$secondArray = ["cle1" => "element1", "cle2" => "element2", "cle3" => "element3"];
print_r($secondArray);
*/

/*
$student = [
    'Classe1'=> ['John', 'Mary', 'Karim'],
    'Classe2' => ['Jane', 'Richard', 'Anna']
]; # Création d'un tableau avec 2 clés = 'Classe1' et 'Classe2' qui ont pour valeurs des noms représentant des éléves. 
*/

/*----------------------------------------------------------*/

/*Les tableaux indexés*/ 

/*
$languages = array(1 => 'PHP', 2 => 'Javascript', 3 => 'Python');
echo $languages[2], "\n"; # Affiche l'index 2 du tableau qui est "Javascript"
echo $languages[3], "\n"; # Affiche l'index 3 du tableau qui est "Python"
var_dump($languages); # La fonction var_dump permet d'afficher des informations détaillées sur une variable, y compris son type, sa valeur et sa structure 
*/

/*
Si les clés ne sont pas précisées, PHP indexe automatiquement chaque valeur du tableau, en commençant à l’index 0
Voici un exemple de tableau dans lequel les clés ne sont pas précisées :

$languages = array('PHP', 'Javascript', 'Python');
var_dump($languages);
*/

/*
$languages = array('PHP', 'Javascript', 'Python');
$LastElement = $languages[count($languages) -1]; # je créer une nouvelle variable qui se nomme '$LastElement' qui est égal à $languages. Ensuite, j'utilise la fonction '$languages[count($languages) -1] qui fait référance au dernier élément du tableau qui est 'Python'. 
var_dump($LastElement); # j'utilise var_dump pour afficher le dernier élément du tableau qui est 'Python'
*/

/*
$isoCodes = [
    'Argentine' => 'AR',
    'Belgique' => 'BE',
    'Chili' => 'CL',
    'Equateur' => 'EC'
];
var_dump($isoCodes);
*/


/*si les nombres à virgule sont convertis à l’entier inférieur, ce qui signifie que tout ce qui est après la virgule est supprimé :*/
/*
$languages = array(1.6 => 'PHP', 'b' => 'Javascript', 'c' => 'Python');
var_dump($languages); # Dans ce code, la clé 1.6 ne sera pas edité dans la console car tous ce qui est après la virgule sera supprimé
*/

/*Les booléens, c’est-à-dire true et false, sont convertis en entier ; true devient donc 1 et false devient 0 :*/

/*
$languages = array(false => 'PHP', true => 'Javascript', 'Python');
var_dump($languages);
*/

/*Quant à lui, Null devient une chaîne de caractères vide*/ 

/*
$languages = array(null => 'PHP', 'Javascript', 'Python');
var_dump($languages);
*/

/*------------------------------------------------------------*/

/*Les manipulations de bases*/ 

/*Pour afficher un élément d’un tableau, on utilise sa clé ou son index entre crochets. Si la clé est une chaîne de caractère, il faut conserver les guillemets.*/ 

/*
$countries = ['Argentine', 'Belgique', 'Chili', 'Equateur'];
$isoCode = [
    'Argentine' => 'AR',
    'Belgique' => 'BE',
    'Chili' => 'CL',
    'Equateur' => 'EC'
];
echo $countries[1], "\n"; # Affiche Belgique
echo $isoCode['Argentine']; # affiche 'AR'
*/

/*
$names = ['Lea', 'Morgan', 'Lionnel', 'Marina'];
foreach($names as $key => $names) { # foreach créer une boucle qui permet de passer en revue chaque élément du tableau 
    echo "Le prénom " . $names . " est la clé " . $key . " du tableau. \n ";
};
*/

/*Si un seul argument est passé à la boucle foreach, elle ne passe en revue que les valeurs, et ignore les clés du tableau*/ 

/*
$names = ['Lea', 'Morgan', 'Lionnel', 'Marina'];
foreach($names as $names) {
    echo $names . "\n";
};
*/

/*
$countries = [
    'Europe' => ['France', 'Belgique', 'Germany'],
    'America' => ['Brazil', 'United States', 'Mexico'],
    'Asia' => ['India', 'China'],
    'Africa' => ['Senegal', 'Mali']
];
echo $countries['Asia'][0], "\n"; # Affiche India
echo $countries['Europe'][2], "\n"; # Affiche Germany
echo $countries['America'][1]; # Affiche United States
*/

/*
$countries = [
    'Europe' => ['France', 'Belgique', 'Germany'],
    'America' => ['Brazil', 'United States', 'Mexico'],
    'Asia' => ['India', 'China'],
    'Africa' => ['Senegal', 'Mali']
];
$countries['Asia'][2] = 'Japan'; # Permet d'ajouter ou de remplacer une valeur à notre tableau '$countries'
echo $countries['Asia'][2]; # Affiche Japan
*/

/*-------------------------------------------------------------*/

/*Les fonctions systéme des tableaux*/ 

/*
count($array) : compte le nombre d’éléments dans un tableau. Valeur de retour : un entier.

in_array($needle, $haystack, $strict = false) : vérifie si un élément existe dans un tableau donné. Si $strict n’est pas passé à true, la comparaison ne se fait pas sur le type de valeur. Valeur de retour : un booléen.

is_array($array) : vérifie si une valeur est de type tableau. Valeur de retour : un booléen. Cette fonction est utile pour vérifier que la valeur reçue est bien du type attendu.

array_unique($array, int $flags = SORT_STRING) : supprime les valeurs en doublon d’un tableau. Le deuxième argument, optionnel, permet de préciser le comportement de comparaison. Valeur de retour : un nouveau tableau (le tableau d’origine n’est pas modifié).

array_reverse($array, $preserve_keys = false) : retourne un tableau dont les éléments sont en ordre inversé par rapport au tableau d’origine. Les clés en chaîne de caractères ne sont pas affectées, mais les clés sous forme d’entier sont modifiées. Si le deuxième argument est à true, les clés numériques seront préservées. Valeur de retour: un tableau.

sort(&$array, $flags = SORT_REGULAR) : trie un tableau sur place (le tableau d’origine est modifié) en ordre croissant. Le deuxième paramètre est optionnel et permet de modifier le comportement de tri. Valeur de retour: true.

rsort(&$array, $flags = SORT_REGULAR) : trie un tableau sur place (le tableau d’origine est modifié) en ordre décroissant. Le deuxième paramètre est optionnel et permet de modifier le comportement de tri. Valeur de retour: true.

implode($separator, $array) : transforme un tableau en chaîne de caractères. Chaque valeur du tableau est séparée de la suivante par la chaîne de caractères passée en premier argument. Valeur de retour: une chaîne de caractères.

max($array) : renvoie la valeur la plus élevée d’un tableau.

min($array) : renvoie la plus petite valeur d’un tableau.
*/


/*
$films = ["Princess Mononoke", 'Matrix', 'Children of Men', 'Matrix', 'Moon'];

function unifyAndSortToString($list) {
if (!is_array($list)) { # Vérifie si une valeur est de type tableau
return;
};
$listUnified = array_unique($list); # array_unique permet de supprimer les valeurs en doublon, donc dans notre cas, 'Matrix' sera supprimer 
sort($listUnified); # sort permet de trier un tableau en ordre croissant
return implode(', ', $listUnified); # Transforme un tableau en chaine de caractére 
};
var_dump(unifyAndSortToString($films));
*/

/*
$mountains = array('Asia' => 'Everest', 'Africa' => 'Kilimandjaro', 'America' => 'Denali');
if (array_key_exists('Asia', $mountains)) # array_key_exists permet de vérifier si une clé existe das un tableau
 ksort($mountains); # trie les clés d'un tableau dans l'ordre décroissant
var_dump($mountains);
*/

/*---------------------------------------------------------------------------*/

/*Les opérateurs de compraison*/ 

/*Les opérateurs de comparaison permettent de comparer deux tableaux et renvoient un booléen.

Égalité : ==

L’opérateur d’égalité == renvoie true si deux tableaux contiennent les mêmes paires clés-valeurs. L’opérateur ne prend pas en compte l’ordre des valeurs ni leur type */

/*
$listA = ['a' => 'PHP', 'b' => 'Javascript', 'c' => 'Python', 'd' => 3];
$listB = ['b' => 'Javascript', 'a' => 'PHP', 'c' => 'Python', 'd' => '3'];
var_dump($listA == $listB); 
*/

/*
$listA = ['a' => 'PHP', 'b' => 'Javascript', 'c' => 'Python', 'd' => 3];
$listB = ['b' => 'Javascript', 'a' => 'PHP', 'c' => 'Python', 'd' => '3'];
var_dump($listA === $$listB); # L’opérateur de Stricte égalité === renvoie true si deux tableaux contiennent les mêmes paires clés-valeurs, du même type, et dans le même ordre, donc dans ce tableau, ils renvoient FALSE
*/

/*
$listA = ['a' => 'PHP', 'b' => 'Javascript', 'c' => 'Python', 'd' => 3];
$listB = ['b' => 'Javascript', 'a' => 'PHP', 'c' => 'Python', 'd' => '3'];
var_dump($listA != $$listB); # Les deux opérateurs d’inégalité != ou <> ont le même fonctionnement. Ils renvoient true si deux tableaux n’ont pas les mêmes paires clé-valeur. Ils ne prennent pas en compte le type et l’ordre des valeurs.
*/



