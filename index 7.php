
<?php

/*
echo 'hello world !'; #echo permet d'afficher le texte
*/

/*------------------------------------------------------*/


/*
echo 195, "\n" ; # un nombre entier écrit dans le système décimal
echo 0b101, "\n" ; # le nombre entier 101 écrit dans le système binaire correspond à 5
echo 0o764, "\n" ; # le nombre entier 764 écrit dans le système octal correspond à 500
echo 0x1F4, "\n" ; # le nombre entier 1F4 écrit dans le système hexa correspond à 500 
echo PHP_INT_MAX, "\n" ; # cette constante correspond à la plus grande valeur entière qui est de 9223372036854775807
*/


/*
echo 42.5, "\n"; # un nombre décimal
echo 4.25e3, "\n"; # un nombre décimal avec un exposant positif, ici 4250
echo 4.24e-3,"\n"; # un nombre décimal avec un exposant négatif, ici 0.00425
*/


/*
echo 0.1+0.2,"\n"; # la somme de 0.1 et 0.2 vaut 0.3
var_dump(0.1+0.2); # en mémoire ca ne vaut pas vraiment 0.3
echo 9.3-5.3,"\n"; # la différence de 9.3 par 5.3 vaut 4
var_dump(9.3-5.3); # en mémoire ca ne vaut pas vraiment 4
*/

/*-----------------------------------------------------*/

/*
les chaines de caractères:
*/


/*
echo 'une simple chaine de cractère',"\n"
echo 'et maintenant avec l\'apostrophe !', "\n"
echo <<<'MON_DELEMITEUR'
 ici je peux écrire du texte comme je le souhaite grace au delemiteur qui peut aller sur plusieurs lignes et contenir des caractères spéciaux 
 MON_DELEMITEUR;
$quantite = 12 ; # on affecte la valeur 12 à la variable $quantite
echo "\nCette boîte contient {$quantite} oeufs.\n" ;
echo "une\ttabulation"; #le caractére spécial "\t" est une tabulation
echo <<<mon_identifiant_de_chaine
\nune chaine avec\ndes\nlignes\multiples ainsi que des variables interprétées :
{$quantite}
mon_identifiant_de_chaine;
*/

/*--------------------------------------------------*/

/* 
Création d'un tableau
*/


/*
$tableau = [4, 5.3, "programmation", "php", 5];
echo $tableau[0]; # affiche le première élément du tableau qui est 4
echo $tableau[3]; # affiche le quatrième élément du tableau qui est "php" 
$tableau[3]="TOM"; # met à jour le quatrième élément du tableau qui devient "TOM"
echo $tableau[3];
$tableau[]= "new"; # ajoute un élément à la fin du tableau qui est "new"
echo $tableau[5]; # affiche la nouvelle valeur 
print_r($tableau); # affiche entiérement toutes les valeurs du tableau 
*/


/*
$famille = [
    "père"=>"pascal",
    "mère"=>"delphine",
    "fils"=>"tom",
    "fille"=>"marine",
];
echo $famille["père"], "\n";
echo $famille["mère"]; "\n";
print_r($famille);
*/


/*
class Livre {
    public $titre;
    public $auteur;
    public $parution;
}
$livre1 = new Livre ();
$livre1 -> titre = "voyage au centre de la terre"; # on renseigne le titre 
$livre1 -> auteur = "jules verne"; # on renseigne l'auteur 
$livre1 -> parution = "1864"; # on renseigne l'année 

$livre2 = new Livre ();
$livre2 -> titre = "le petit prince";
$livre2 -> auteur = "antoine de saint exupéry";
$livre2 -> parution = "1943";
print_r($livre2);
*/

/*-----------------------------------*/


/*Les variables*/

/*
function combien(){ # on définie une fonction "combien"
    $poids = 300; # on définit une variable "$poids" dans le fonction
}
combien(); # on exécute la fonction "combien"
echo $poids; # on veut afficher une variable $poids, mais il n'existe pas de variable $poidsà ce niveau, donc un message d'érreur est afficher
*/


/*
function affiche(){ # on défini une fonction "affiche"
    $quantite = 2; # on initialise une variable locale "$quantite"
    echo $quantite, "\n"; # on affiche cette variable 
}
$quantite = 5; # on définit une variable globale $quantite
affiche(); # on exécute la fonction "affiche", qui affiche 2
echo $quantite, "\n";

Dans ce premier exemple, la variable globale $quantite n’est pas connue à l’intérieur de la fonction “affiche”. Nous avons donc deux variables différentes, avec le même nom $quantite, mais une de portée locale (dans la fonction uniquement) et l’autre de portée globale.
*/

/*
function affiche_bis(){
    global $quantite; # on déclare utiliser la variable globale $quantite
    echo $quantite, "\n"; # on affiche cette variable 
    $quantite = 2; # on modifie cette variable à 2
}
$quantite = 5; # on définit une variable globale $quantite à 5
affiche_bis(); # on éxecute la fonction "affiche_bis"
echo $quantite, "\n";

Dans ce deuxième exemple, il n’existe qu’une seule variable $quantite, avec une portée globale
*/


/*-------------------------------------------------------------*/


/*Les variables dynamiques*/

/*
$document = 'texte' ; # on définit une variable $document qui vaut 'texte'
$texte = 'chaine' ; # on définit une variable $texte qui vaut 'chaine'
$chaine = 'lien' ; # on définit une variable $chaine qui vaut 'lien'
echo "$document\n" ; # affiche la valeur de la variable $document, soit 'texte'
echo "$$document\n" ; # affiche le symbole $ suivi de la valeur de la variable $document, soit 'texte'
echo "$$$document\n" ; # affiche 2 symboles $ suivis de la valeur de la variable $document, soit 'texte'
echo "${$document}\n" ; # affiche la valeur de la variable dont le nom est $texte, soit 'chaine'
echo "${${$document}}\n" ; # affiche la valeur de la variable dont le nom est $chaine, soit 'lien'
*/

/*------------------------------------------------------------*/

/*Les constantes*/

/*
define("MAJEUR",18); # on définit une constante nommé "MAJEUR" qui vaut 18
echo MAJEUR, "\n";
define("TEMPERATURE", 31);
echo TEMPERATURE, "\n";
*/

/*Les constantes prédefinies*/

/*
echo PHP_VERSION, "\n"; # affiche la version de php utilisée
echo PHP_INT_MAX, "\n"; # affiche l'entier le plus grand
echo PHP_FLOAT_MAX, "\n"; # affiche le flottant le plus grand
*/

/*Les constantes magiques*/

/*
echo __FILE__, "\n"; # affiche le nom complet de ce fichier
echo __LINE__, "\n"; # affiche le numéro complet de cette ligne
function affichage(){ # on définit une fonction nommé "affichage"
    echo __FUNCTION__; # affiche le nom de la fonction en cours
}
affichage(); # on éxecute cette fonction "affichage"
*/


?>
