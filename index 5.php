<?php

/*La superglobale $_GET*/ 

/*Voici un exemple de code qui permet de récupérer les valeurs d’un paramètre en faisant appel à la requête $_GET dans une URL. Le code présenté montre comment créer un tableau associatif en PHP, où chaque paramètre est composé d'une clé et d'une valeur. Le tableau contient trois éléments avec les clés "clé1", "clé2" et "clé3", et respectivement les valeurs "valeur1", "valeur2" et "valeur 3".*/ 

/*
///index.html?id=123 // PAGE WEB index.html

$_GET['id']; // requete pour récuperer l'ID de l'URL

// Tableau associatif

$tableau = [
    "clé1" => "valeur1",
    "clé2" => "valeur2",
    "clé3" => "valeur3"
];
*/

/*
<?php
if(isset($_GET['plat']) && !empty($_GET['plat'])) {
  $plat = $_GET['plat'];
} else {
  $plat = 'Plat non défini';
}
?>

<a href="?plat=pizza"> Plat 1 </a><br>
<a href="?plat=salade"> Plat 2 </a><br>

<?php
echo '<br>';
echo $plat;
echo '</br>';
?>
*/

/*
//Vérifie si le paramétre "id" est présent dans l'URL
if(isset($_GET['id'])){
    //Vérifie si l'id afficher dans l'url correspond à la valeur 1
    if($_GET['id'] === '1'){
        //affiche la div 1
        echo '<div><p>Contenu de la div 1</p></div>';
    } else if($_GET['id'] === '2'){
        //affiche la div 2
        echo '<div ><p>Contenu de la div 2</p></div>';
    }
}
*/


/*Ce code PHP vérifie si le paramètre "id" est présent dans l'URL via la superglobale $_GET. Si c'est le cas, il vérifie si la valeur de l'id correspond à la valeur 1 ou 2. Si l'id correspond à 1, il affiche une div avec le contenu "Contenu de la div 1". Sinon, si l'id correspond à 2, il affiche une autre div avec le contenu "Contenu de la div 2". En utilisant la méthode GET, il est donc possible de récupérer des informations depuis l'URL pour adapter l'affichage de la page, en fonction des données fournies. La fonction isset () permet de vérifier si une variable a été définie et si elle n’est pas nulle. C’est une façon de vérifier si une variable est initialisée avant de l’utiliser dans une instruction.*/ 

/*-------------------------------------------------------------*/

/*La superglobale $_POST*/

/*
    <?php
        // SCRIPT PHP
          ?>
<form action="form.php" method="POST">
			<label for="pseudo">Pseudo :</label>
			<input type="text" id="pseudo" name="pseudo">
			<label for="mot de passe">Mot de passe :</label>
			<input type="password" id="password" name="password"><br><br>
			<input type="submit" value="Envoyer">
		</form>
*/


/*
//Vérifie si les champs ont été soumis
if(isset($_POST['pseudo']) && isset($_POST['password']))
{
  $pseudo = $_POST['pseudo'];
  $password = $_POST['password'];
  //exemple de validation
  if(empty($pseudo) || empty($password))
  {
    echo "Veuillez entrer un pseudo et un mot de passe";
  } else{
    echo "Bienvenue, $pseudo !";
  }
}
*/


?>