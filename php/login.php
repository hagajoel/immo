<?php
    session_start();
    include("../inc/connexion.php");
    $query = $pdo->query("SELECT * FROM users WHERE email = '" . $_POST["email"] . "' and mdp = '" . $_POST["mdp"] . "'");
    $donnee = $query->fetch(PDO::FETCH_OBJ);
    $query->closeCursor();
    if ($donnee == true) {
        $cat = $donnee->category;
        $_SESSION["id"] = $donnee->iduser;
        echo $cat;
    }else{
        echo "erreur";
    }
?>