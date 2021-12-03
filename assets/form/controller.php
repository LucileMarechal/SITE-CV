<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    //identifiant mySQL
    $host="localhost";
    $username="root";
    $password="";
    $database="CV_SITE";

    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $email = $_POST["email"];

     if(!isset($lastname)){
        die("Veuillez entrer votre nom");
    }

    if(!isset($firstname)){
        die("Veuillez entrer votre prénom");
    }

    if(!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        die("Veuillez entrer votre email");
    }


    //Ouvrir une nouvelle connexion au serveur mysql
    $mysqli = new mysqli($host, $username, $password, $database);

    //Afficher les erreurs de connexion
    if($mysqli->connect_error){
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
        
        //préparer la requête d'insertion SQL
        $statement = $mysqli->prepare("INSERT INTO  'users'  (lastname, firstname, email) VALUES(?, ?, ?");
        //Associer les valeurs et exécuter la requête d'insertion
        $statement->bind_param ('sss', $lastname, $firstname, $email);
    
        if ($statement->exeute()){
            print print "Bonjour" .  $firstname . $lastname . "votre message à bien été envoyé";

        }else{
            print $mysqli->error;
        }
    }
    
}
?>