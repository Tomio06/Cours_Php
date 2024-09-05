<?php

/*Les opérateurs d'incrémentation et décrémentation*/ 

/*
$age = 25 ; # on définit la variable $age avec la valeur 25
echo $age ; # on utilise la variable $age, qui va afficher sa valeur 25
*/

/*Le langage PHP contient des opérateurs qui permettent de faire ces deux utilisations des variables (la lecture et la mise à jour) simultanément. Il s’agit du “++” pour l’incrémentation, c’est-à-dire l’augmentation de 1, et du “--” pour la décrémentation, c’est-à-dire la diminution de 1. Ainsi l’exemple précédent peut s’écrire*/ 

/*
echo ++$places_disponibles ; # on affiche le nombre de place disponible après la sortie d'une voiture
echo --$places_disponibles; # on affiche le nombre de place après l'entrée d'une voiture
*/

/*Ces opérateurs “++” et “--” peuvent être placés :

Avant la variable, comme dans notre exemple, dans ce cas la variable est d’abord mise à jour, puis lue, pour être affichée.

Après la variable, dans ce cas la variable est d’abord lue puis mise à jour.*/ 

/*
$var = 5;
echo $var++; # affiche 5 puis incrémente $var de 1
echo $var; # affiche 6
$var = 5;
echo ++$var; # incrémente directement $var de 1 et affiche 6
$var = 5;
echo $var--; # affiche 5 puis décrémente $var de 1
echo $var; # affiche 4
$var = 5;
echo --$var; # décrémente directement $var de 1 et affiche 4
*/

/*------------------------------------------------------------*/

/*Les boucles "foreach"*/ 

/*Pour itérer sur un tableau, nous utilisons le mot-clé “foreach”, traduit littéralement par “pour chaque”. Ensuite, entre parenthèses, nous indiquons le tableau suivi du mot-clé “as”, puis deux noms de variables séparés par “=>” qui contiendront, à chaque itération, la position (l'index) et la valeur de l’élément considéré.

Il existe également une syntaxe plus courte, dans le cas où l’ordre de l’élément n’est pas nécessaire.*/ 

/*
$tab = ['a', 'b', 'c', 'd', 'e']; # on créer un tableau qui contient 5 éléments
foreach($tab as $val){ # initialisation de la boucle
# à chaque itération, la vriable $val contient la valeur de l'élément considéré
# il n'est plus possible de connaitre la position de l'élément 
    echo $val; # affiche la valeur de l'élément
}
# l'affichage à l'écran sera donc "abcde"
*/

/*
$tab = ['a','b','c','d','e']; # la variable $tab est un tableau de 5 éléments
# la valeur de chaque élément est une lettre
foreach($tab as $pos => $val){ # initialisation de la boucle
	# à chaque itération, la variable $pos contient la position de l’élément dans le tableau
	# la variable $val contient la valeur de l’élément considéré
	echo $pos,':', $val; # affiche la valeur de l’élément
}
# l’affichage à l’écran est “abcde”
*/

/*-------------------------------------------------------*/

/*Les expressions booléennes*/ 

/*
var_dump(true) ; # affiche bool(true)
var_dump(false) ; # affiche bool(false)
var_dump(2==1) ; # affiche le résultat du test "2 est-il égal à 1", soit bool(false)
var_dump(2>1) ; # affiche le résultat du test "2 est-il supérieur à 1", soit bool(true)
var_dump(2!=1) ; # affiche le résultat du test "2 est-il différent de 1", soit bool(true)
var_dump(2<=1) ; # affiche le résultat du test "2 est-il inférieur ou égale à 1", soit bool(false)
*/

/*--------------------------------------------------------*/

/*Les boucles "for"*/ 

/*
for($k = 1; $k < 10; $k++){ # les trois phases sont séparés par le caractère ";"
    echo $k; # affiche 123456789
}
*/


/*Dans cet exemple :

La phase d’initialisation est donnée par “$k=1” : on définit une variable $k à la valeur 1.

La phase de condition est donnée par “$k<10” : la boucle est réitérée tant que la condition est vraie, dans ce cas tant que la variable $k est strictement inférieure à 10.

La phase d’actualisation est donnée par “$k++” : à chaque itération, la variable $k est incrémentée de 1.

Entre accolades, le code constituant la boucle et exécuté à chaque itération, dans cet exemple l’affichage de la valeur de la variable $k.*/ 

/*---------------------------------------------------------*/

/*Les boucles "while"*/

/*
$d = 1; # phase d'initialisation
while($d < 10){ # phase de test conditionnel
    echo $d;
    $d++; # phase d'actualisation
}
# affiche 123456789
*/

/*Dans cet exemple, on se contente d’afficher la variable $d, mais dans vos programmes à venir, le corps de la boucle pourra comporter beaucoup plus de lignes*/ 

/*--------------------------------------------------------*/

/*Les boucles "do...while"*/

/*
$s = 1; # phase d'initialisation
do {
    echo $s++; # phase d'actualisation combinée à l'affichage
} while($s < 10); # phase de test conditionnel
# affiche 123456789
*/

/*----------------------------------------------------------*/

/*L'instruction "break"*/

/*L’instruction “break” peut être utilisée dans toutes les boucles : foreach, for, while, do…while. Cette commande permet de sortir instantanément de la boucle où elle est placée. C’est un peu une sorte d’astuce de développeur pour terminer rapidement une boucle sans achever l’itération courante.

La commande “break” peut aussi être suivie d’un nombre entier, lorsque plusieurs boucles sont imbriquées, pour indiquer le nombre de boucles à terminer.*/ 

/*
$tab = [1, 2, 3, 4.5, 5, 6]; # initialise un tableau de nombres entiers
foreach($tab as $v){ # on parcourt le tableau
    # chaque élément, à chaque itération, est mémorisé dans le $v
    if(!is_int($v)){ # si il ne s'agit pas d'un nombre entier
        break; # alors on avorte la boucle
    }
    echo $v; # on affiche l'élément courant qui est un nombre entier
}
# affiche uniquement "123" puisque la boucle se termine quand elle parcourt l'élément "4.5" qui n'est pas un nombre entier
*/




?>
