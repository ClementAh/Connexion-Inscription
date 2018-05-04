<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "t_forms";

$conn = new mysqli($servername, $username, "", $dbname);
if(!$conn){
    echo "Erreur de connexion à la base de données.";
} else {

    $sql = "SELECT ID_users, name, lastname, mail,pictures, mdp FROM t_users";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) == 0) {
        echo "";
    } else {


        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                echo "ID : " . $row["ID_users"] . "<br>" . "Name :" . $row["name"] . "<br>" . "Lastname : " . $row['lastname'] . "<br>". "Mail : " . $row['mail'].  "<br>"."Pictures : " . $row['pictures'] .  "<br>"."password : " . $row['mdp']."<br>" . "<br>";
            }


        }

    }
}

?>

