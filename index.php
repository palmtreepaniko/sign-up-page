<?php
$cnx = mysqli_connect("localhost", "root", "", "user") 
       or die(mysqli_error($cnx));

$email = $_POST["email"];
$pass  = $_POST["pass"];

$req = "INSERT INTO user VALUES('$email', '$pass')";
$res = mysqli_query($cnx, $req);

if(mysqli_affected_rows($cnx) > 0) {
    echo "Ajout effectué avec succès";
} else {
    echo "Erreur d'ajout";
}

mysqli_close($cnx);
?>
