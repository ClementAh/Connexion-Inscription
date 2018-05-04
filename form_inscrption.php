<?php

if(isset($_POST['inscription'])){

    $tabErreur = array();
    $name = ($_POST['name']);
    $lastname = ($_POST['lastname']);
    $mail = ($_POST['mail']);
    $pictures = ($_POST['pictures']);
    $mdp = ($_POST['password']);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "t_forms";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql2 = "INSERT INTO t_users (ID_users,name,lastname,mail,pictures,mdp) VALUES (NULL, '$name','$lastname','$mail','$pictures','$mdp')";
    if ($conn->query($sql2) === TRUE) {
        echo "Connexion établie !";
    } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
    }

}
?>


}