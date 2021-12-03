<?php
//Vérifier qu'il provient d'un formulaire

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $lastname =  $_POST["lastname"];
    $firstname =  $_POST["firstname"];
    $email =  $_POST["email"];

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

    print "Bonjour" .  $firstname . $lastname ;

}

?>