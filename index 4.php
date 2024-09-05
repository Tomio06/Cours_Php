<?php

/*Les arguments*/

/*
strlen("Don't repeat yourself"); # La fonction "strlen()" permet de connaitre la taille d'une chaine de caractère 
*/

/*
$sentence = "Don't repeat yourself";
strlen($sentence);
*/

/*
function sayHello($firstname, $lastname) {
    echo "Bonjour " .  $firstname . " " . $lastname . "!";
}
sayHello("Jone", "Doe");

Dans cet exemple, le programme saluera l’utilisateur par un “Bonjour John Doe!”. Vous pouvez constater que les arguments passés à la fonction sayHello() respectent l’ordre des paramètres définis en amont.
*/

/*
function sayHello(...$persons) {
    foreach($persons as $persons) {
        echo "Bonjour " . $persons . "!\n";
    }
}
sayHello("Agnès", "Thomas", "Kenza", "Pascal");
*/

/*
function sayHello($name = "illustre inconnue"){
    echo "Bonjour " . $name . "!\n";
}
sayHello();
*/


/*
$name = "hector";
function sayHello($name){
    $name = ucfirst($name); # ucfirst() passe le premier caractère d'une chaine en majuscule
    echo "Bonjour " . $name . "!\n";
}
sayHello($name); # hector devient donc Hector
*/

/*-------------------------------------------------------------*/

/*La valeur de retour*/

/*
function isOver18($age){
    if($age < 18){
        return false;
    } return true;
}
$result = isOver18(17);
*/

/*
$number = [1, 2, 3];
$doubles = array_map(fn($element) => $element * 2, $number);
print_r($number);
*/


?>
