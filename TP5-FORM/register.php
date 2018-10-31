<?php


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['password'];


$fails = [];

if (empty($email)) {
    $fails[] = " email";
}

if (empty($password)) {
    $fails[] = " password";
}

if (empty($nom)) {
    $fails[] = " nom";
}

if (empty($prenom)) {
    $fails[] = " prenom";
}

if (count($fails) > 0) {
    echo "Le(s) chanmp(s) ";
    foreach ($fails as $fail){
        echo $fail . "";
    }
    echo " est/sont vide(s)";



}else {
    $connexionBdd = mysqli_connect('localhost', 'root', 'root');
    mysqli_set_charset($connexionBdd, 'utf8');
    $selectionBase = mysqli_select_db($connexionBdd, 'TP5');

    $requete = "INSERT INTO utilisateur VALUES (null, '$nom', '$prenom', '$email', '$password')";

    $query = mysqli_query($connexionBdd,$requete); /* (3) Envoi de la requête de puis le script actuel vers la base de données, et récupération du résultat de la requête
*/


    if ($query == false){
        echo "impossible";
    }else{
        header('Location: index.php');
    }


}



