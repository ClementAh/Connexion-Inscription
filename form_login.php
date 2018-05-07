<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "t_forms";

if(isset($_POST['validation'])) { // si le bouton "Connexion" est appuyé
// on vérifie que le champ "Pseudo" n'est pas vide
// empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
    if(empty($_POST['login'])) {
        echo "Le champ Pseudo est vide.";
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['password'])) {
            echo "Le champ Mot de passe est vide.";
        } else {
            // les champs sont bien posté et pas vide, on sécurise les données entrées par le membre:
            $login = htmlentities($_POST['login'], ENT_QUOTES, "ISO-8859-1");
            $mdp = htmlentities($_POST['password'], ENT_QUOTES, "ISO-8859-1");
            $id = $_SESSION['ID_users'];
            //on se connecte à la base de données:
            $conn = new mysqli($servername, $username, "", $dbname);
            if(!$conn){
                echo "Erreur de connexion à la base de données.";
            } else {

                $sql ="SELECT ID_users, name, mdp FROM t_users WHERE name = '$login' AND mdp = '$mdp'";
                $result = $conn->query($sql);

                if(mysqli_num_rows($result) == 0) {
                    echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
                } else {

                    $_SESSION['login'] = $login;
                    if ($result->num_rows > 0) {

                        while($row = $result->fetch_assoc()) {
                            echo "ID : " . $row["ID_users"] . "<br>" . "Name :" . $row["name"] . "<br>" . "password : " .$row['mdp']. "<br>". "<br>";
                        }




                        echo"<a href='profil.php?id='".$id."'>Mes informations </a>";


                    }
                }
            }

        }

    }

}

?>

