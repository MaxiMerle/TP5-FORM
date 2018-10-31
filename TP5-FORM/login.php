<?php
/**
 * Created by PhpStorm.
 * User: lapiscine
 * Date: 29/10/2018
 * Time: 18:39
 */

$email = $_POST['email'];
$password = $_POST['password'];

$fails = [];

if (empty($email)) {
    $fails[] = "email";
}

if (empty($password)) {
    $fails[] = "password";
}

if (count($fails) > 0) {
    echo "Le(s) chanmp(s)";
    foreach ($fails as $fail){
        echo $fail . "";
    }
    echo "est/sont vide(s)";
}else{

    $connexionBdd = mysqli_connect('localhost', 'root', 'root');
    mysqli_set_charset($connexionBdd, 'utf8');
    $selectionBase = mysqli_select_db($connexionBdd, 'TP5');

    $requete = "SELECT nom, prenom FROM utilisateur WHERE email = '$email' AND password = '$password' LIMIT 1"; // on recupere le nom et prenom pour l'afficher mais pas besoins de recuperer mail et mdp pour securité car on le compare deja dans le WHERE
   // $requete = "SELECT nom, prenom FROM utilisateur WHERE email = \"$email\" AND pass = \"$password\" LIMIT 1";  -- FONCTIONNE IDEM



    $query = mysqli_query($connexionBdd,$requete); /* (3) Envoi de la requête de puis le script actuel vers la base de données, et récupération du résultat de la requête
*/
    $result = mysqli_fetch_assoc($query); // RECUPERER DONNEES DANS BDD - RENVOIE TOUS LES RESULTATS // RENVOI SOIT RESULTAT SOIT NULL

    if (is_array($result)){ // SI J'ARRIVE A ME CONNECTER ...

        session_start();
        $_SESSION['nom'] = $result['nom'];


        echo "Bonjour " . $result['prenom'] . " " . $result['nom']; // si le array existe, cest que les logins existent bien dans la BDD -> donc on affiche son nom et prenom
        echo "<a href='article.php'>articles</a>";

    } else{ // SI JE N4ARRIVE PAS A ME CONNECTER ...

        // si la combinaison mot de passe/email ne marche pas, on fait une requete pour voir quel champ est manquant

        $requete_email = "SELECT COUNT(*) FROM utilisateur WHERE email = \"$email\"" ; // fonction COUNT pour verifier si l'email est deja dans la BDD ou non
        $query_email = mysqli_query($connexionBdd,$requete_email);

        $result_email = mysqli_fetch_row($query_email);    // fetch_assoc affiche comme index le nom de la colum / renvoi 1 si le mail existe, 0 si il existe pas

        if ($result_email[0] == "1"){  // si 0 cest que l'email na pas ete trouvé, il existe pas. Si il y 1 cest que l'email existe mais que le mot de passe est mauvais

            echo "le mot de passe correspondant a ce compte n'est pas correct ";

        } else {
            echo "l'email n'existe pas, veuillex creer un compte";
        }

        // OPERATEUR TERNAIRE echo ($result_email[0] == "1") ? "le mot de passe correspondant a ce compte n'est pas correct " : "l'email n'existe pas, veuillex creer un compte";

    }




}

