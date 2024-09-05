<?php

/*La sécurité*/

/*Attaque par injections*/ 

/*La première faille que nous allons aborder est l'attaque par inclusion de fichiers. En PHP, l'inclusion de fichiers est une fonctionnalité qui permet d'inclure le contenu d'un fichier dans un autre fichier. Cela peut être très utile pour réutiliser du code commun à plusieurs pages, mais cela peut aussi être exploité par des pirates informatiques pour exécuter du code malveillant sur notre site web.

La méthode la plus courante utilisée par les attaquants pour exploiter cette faille est appelée « l'inclusion de fichiers locaux ». Ils utilisent une variable non filtrée pour inclure un fichier local. Par exemple, si un site web utilise une URL de la forme http://example.com/?page=about.php, un pirate informatique peut remplacer le nom du fichier about.php par un chemin de fichier absolu sur le serveur (http://example.com/?page=/etc/passwd),ce qui inclura le contenu du fichier /etc/passwd. Pour éviter cela, il est important de valider et filtrer toutes les entrées utilisateur, comme les paramètres d'URL, les formulaires et les cookies, pour s'assurer qu'elles sont conformes à ce qui est attendu.

Exemple : */


/*
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>
    <h1>Formulaire</h1>
    <form action="traitement.php" method="post">
        <label for="user_input">Entrez une valeur :</label>
        <input type="text" id="user_input" name="user_input" required><br><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>

<?php
// On récupère la valeur du champ "user_input" envoyé en POST depuis le formulaire HTML
$user_input = $_POST['user_input'];
// On filtre la valeur du champ "user_input" avec la fonction htmlspecialchars() pour supprimer les caractères indésirables
 $sanitized_input = htmlspecialchars($user_input, ENT_QUOTES | ENT_HTML5, 'UTF-8');
?>
*/


/*Attaque par inclusion SQL
Un autre type d'attaque par inclusion est l'attaque d'inclusion SQL, aussi connue sous le nom d'injection SQL. Cette faille de sécurité permet à un attaquant d'exécuter du code SQL malveillant sur le serveur de base de données en exploitant une vulnérabilité dans l'application qui n'a pas correctement validé les entrées utilisateur. L'attaque d'injection SQL peut être très dangereuse, car elle permet à l'attaquant de manipuler la base de données à sa guise. Les attaquants peuvent utiliser cette faille pour extraire des données confidentielles, modifier ou supprimer des données, ou même prendre le contrôle du serveur.

Pour éviter l'injection SQL, il est crucial de toujours valider et filtrer les entrées utilisateur avant de les utiliser dans des requêtes SQL. Les requêtes préparées sont une méthode courante pour prévenir les injections SQL en PHP. Elles utilisent des marqueurs de paramètres qui sont remplacés par les valeurs appropriées au moment de l'exécution de la requête, ce qui empêche l'attaquant de modifier le code SQL.*/ 

/*
// On définit la source de données (DSN) qui permettra de se connecter à la base de données
$dsn = "mysql:host=localhost;dbname=mydb;charset=utf8mb4";
// On définit les options pour la connexion PDO, notamment le mode d'erreur à utiliser en cas de problème
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
   ];
// On crée une nouvelle instance de PDO en utilisant les informations de connexion précédemment définies
$pdo = new PDO($dsn, "username", "password", $options);
*/

/*
<form action="votrelienduscript.php" method="post">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" name="username" id="username" required>
    <input type="submit" value="Rechercher">
</form>
// On récupère la valeur du champ "username" envoyé en POST depuis le formulaire HTML
$user_input = $_POST['username'];
// On prépare une requête SQL pour sélectionner tous les utilisateurs ayant pour nom d'utilisateur celui envoyé depuis le formulaire
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
// On exécute la requête en passant le nom d'utilisateur comme paramètre
$stmt->execute(['username' => $user_input]);
// On récupère le résultat de la requête sous forme d'un tableau associatif
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
*/

/*$user_input récupère la valeur de l'entrée utilisateur à partir de $_POST['username'].
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username"); cette requête utilise une variable de liaison ":username" pour représenter la valeur de l'entrée utilisateur dans la clause WHERE de notre requête SELECT.
->execute permet d'exécuter la requête en remplaçant les paramètres liés (dans ce cas-ci, :username) par les valeurs spécifiées dans le tableau associatif passé en argument.
fetchAll() est appelée sur l'objet de requête préparée $stmt pour récupérer tous les résultats de la requête sous la forme d’un tableau associatif*/ 

/*Voici un exemple de code qui filtre les entrées d'utilisateurs en faisant appel à la fonction htmlspecialchars() permettant de convertir certains caractères envoyés par l’utilisateur, avec leur équivalence en HTML. Pratique pour filtrer les caractères qui peuvent être utilisés comme les guillemets, les apostrophes et cela afin d’éviter les injections de code malveillant. Par exemple les doubles quotes deviennent “ &#039”.*/ 

/*
// On utilise la fonction htmlspecialchars() pour convertir les caractères spéciaux en entités html dans les champs "username" et "password"
// Les options ENT_QUOTES et UTF-8 prennent en compte tous les types de caractères et les guillemets simples et doubles 
$username = htmlspecialchars($_POST["username"], ENT_QUOTES, 'UTF-8');
$password = htmlspecialchars($_POST["password"], ENT_QUOTES, 'UTF-8');
*/

/*
$dsn  = "mysql:host=localhost;dbname=faille;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];
$pdo = new PDO ($dsn, 'admin', 'admin', $options);
// On prépare la requête SQL avec des marqueurs de position
$pdo_prep = $pdo->prepare("SELECT * from user WHERE username = ? AND password = ? ");
// On exécute la requête SQL avec les valeurs des variables $username et $password comme arguments
$pdo_prep->execute([$username,$password]);
// On récupère le premier enregistrement de la requête SQL sous forme de tableau associatif
$user = $pdo_prep->fetch();
*/

/*
//code final
if ($user) {
    echo "<br>"; 
    echo " Bienvenue " .$user['username'] . "!";
    } else {
        echo " Nom d'utilisateur ou mot de passe incorrect";
    }
    <?php 
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
    // Connexion a la bdd 
    $dsn  = "mysql:host=localhost;dbname=faille;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]; 
    // requete prepare 
    $pdo = new PDO ($dsn, 'admin', 'admin', $options);
    $pdo_prep = $pdo->prepare("SELECT * from user WHERE username = ? AND password = ? ");
    $pdo_prep->execute([$username,$password]);
    $user = $pdo_prep->fetch();
    if ($user) {
    echo "<br>"; 
    echo " Bienvenue " .$user['username'] . "!";
    } else {
        echo " Nom d'utilisateur ou mot de passe incorrect";
    }
*/

/*-----------------------------------------------------------*/

/*Attaque par injections de commandes*/ 




?>