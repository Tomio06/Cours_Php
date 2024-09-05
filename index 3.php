<?php

/*Les conditions*/ 

/*L’instruction conditionnelle if permet d'exécuter certaines parties du code seulement si une condition donnée est vérifiée.

Si la condition est vraie (true), le code associé à l'instruction if est exécuté,
Si la condition est fausse (false), le code est ignoré et le programme passe à la suite.
Ce type de condition est très utile pour rendre les programmes plus flexibles et adaptatifs, car il permet au programme de prendre des décisions en fonction des données d'entrée ou de l'état du programme.*/ 

/*
$age = 21;
if($age >= 18){
    echo 'Vous etes majeur';
}
*/

/*Alors que la condition if va uniquement tester si une condition est vraie, la condition if…else, va tester si elle est vraie, mais aussi préciser si elle est fausse.

Testons une condition :

Si c'est vrai, on teste ce qu’il y a à l’intérieur.
Si c’est faux, on n’exécute pas ce qu’il y a après le if, mais on continue jusqu’au else, et on exécute ce qu’il y a comme instruction après le else.
L’ordre est le suivant :*/

/*
$age = 17;
if($age >= 18){
    echo 'Vous etes majeur';
} else {
    echo 'Vous etes mineur';
}
*/


/*Lorsqu’une seule condition n’est pas suffisante pour couvrir l’ensemble des situations, vous pouvez utiliser la structure si - sinon si - sinon.

Lorsqu’une condition n’est pas vraie (false), au lieu de continuer le programme, il est tout à fait possible d’exécuter du code en plus, grâce à l’instruction else (sinon).

L’ordre est le suivant*/ 

/*
$score = 100;
if($score >= 95){ # Si le score est supérieur ou égal à 95, le message 'Excellent travail' s'affichera
    echo 'Excellent travail';
} else if($score >= 85){ # si le score est superieur ou égal à 85, le message 'Tres bien' s'affichera
    echo 'Trés bien !';
} else if($score >= 70){ # Si le score est superieur ou égal à 70, le message 'Pas mal' s'affichera 
    echo 'Pas mal !';
} else { # En dessous de 70 le message 'Vous pouvez quand meme faire mieux' s'affichera
    echo 'Vous pouvez quand meme mieux faire...';
}
*/


/*Vous pouvez écrire else if ou bien elseif, cela reviendra au même, sauf pour la condition ternaire où il faut obligatoirement utiliser l’expression elseif.*/ 

/*
$sport = "Escalade";
if($sport == "Football"){
    echo "Vous jouez au Football";
} elseif($sport == "Basketball"){
    echo "Vous jouez au Basketball";
} elseif($sport == "Escalade"){
    echo "Vous pratiquez de l'escalade";
} else {
    echo "Aller faire du sport faignasse";
}
*/

/*-------------------------------------------------------------*/

/*Opérateur ternaire*/ 

/*Afin de simplifier l’écriture des instructions if…else, vous pouvez utiliser l’opérateur ternaire qui permet d’effectuer une opération conditionnelle en une seule ligne afin de simplifier votre code.

?  L'opérande ternaire qui est l'équivalant du if (valeur si vrai)
:  L'opérande ternaire qui est l'équivalant du else (valeur si faux) */

/*
$age = 18;
$Message = ($age <= 18) ? "Vous etes mineur" : "Vous etes majeur";
echo $Message;
*/

/*
$passWorld = "ToPaDeMa03";
$Email = "tomiolaudrel@gmail.com";
$UserName = "Tomio";
$FalseName = "Illustre inconnue";
if($passWorld ==="ToPaDeMa03" && $Email === "tomiolaudrel@gmail.com"){ # && permet de rajouter une vraiable dans notre condition 
    echo " Bienvenue " . $UserName . "!";
} else {
    echo " Desolé, vous ne pouvez pas entrer " . $FalseName . "!" ;
}
*/

/*------------------------------------------------------------------------------*/

/*L'instruction conditionnelle switch*/ 

/*Voici la structure d’un switch :

switch : le mot-clé indiquant que nous allons utiliser le switch.
$variable : la valeur à comparer dans les case.
case 'valeur' : les différentes valeurs de comparaison.
break : l’instruction indiquant de sortir du switch quand on a rencontré un case.
default : sert à gérer tous les autres cas et sera exécuté si aucun case ne correspond à la valeur de la variable. C’est l’équivalent d’un ELSE.*/ 

/*
$fruit = 'Pomme';
switch ($fruit){
    case 'Cerise':
        echo 'Vous mangez une cerise !';
        break;
    case 'Pomme':
        echo 'Vous mangez une pomme !';
        break;
    case 'Orange':
        echo 'Vous mangez une orange';
        break;
    default:
    echo 'Je ne sais pas quel fruit vous mangez';
}
*/

/*Pensez à mettre le mot-clé break à chaque fin de bloc case, si vous l’oubliez, le programme continuera de comparer les case les uns après les autres et tous les case seront affichés si vous utilisez un echo.*/ 

/*----------------------------------------------------------------------*/

/*L'expression Match*/ 

/*La principale différence entre les expressions switch et match est que match a été introduit dans la version 8 de PHP et est une structure plus moderne et plus souple que switch.*/ 

/*
$color = "Rouge";
$result = match($color){
    "Rouge" => "Le tee-shirt est rouge !",
    "Vert" => "Le tee-shirt est vert",
    "Bleu" => "Le tee-shirt est bleu",
    default => "La couleur du tee-shirt est inconnue"
};
echo $result;
*/

/*Voyons une autre alternative de match*/ 

/*
echo match(2){
    0 => "Paul",
    1 => "Marie",
    2 => "Jean",
    default => "Je ne connais pas le nom !"
};
*/

/*-------------------------------------------------------------------*/

/*Require et Include*/ 

/*Les instructions require et include permettent d’inclure un fichier de code à l’intérieur d’un autre fichier PHP. La principale différence entre les deux est la gestion des erreurs. Ces instructions sont utilisées pour charger un fichier externe dans votre script PHP.*/ 


/*Différence entre les instructions require et include
L’instruction require est plus stricte que include. Si le fichier spécifié dans l’instruction require ne peut pas être inclus pour une raison quelconque (par exemple, s’il n’existe pas ou s’il est indisponible), le script PHP s’arrêtera et affichera une erreur fatale. Cela signifie que si le fichier inclus est vital pour le fonctionnement du script, l’utilisation de require est plus appropriée.*/ 

/*
Exemple de Require :

<?php
   require 'footer.php;
?>

Exemple de Include :

<?php
   Include 'footer.php;
?>
*/ 

/*-----------------------------------------------------------------------*/

/*Include_once et Require_once*/ 

/*Les instructions require et include permettent d’inclure plusieurs fois un même fichier. Tandis que leurs variantes require_once et include_once nous l’interdisent, avec lesquelles on ne pourra inclure un même fichier qu’une seule fois.*/ 

/*En général, il est recommandé d'utiliser require_once pour inclure des fichiers, car cela permet d'éviter des problèmes éventuels si le fichier est inclus plusieurs fois. Cependant, il peut parfois être nécessaire d'utiliser require si le fichier doit être inclus à chaque fois que l'instruction est exécutée.*/ 

