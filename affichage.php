<?php 
    session_start();
    require_once 'config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Affichage 5 Majeur</title>
</head>
<body>

    <ul>
        <li><a href="landing.php">Acceuil</a></li>
        <li><a href="creation.php">Création</a></li>
        <li><a href="modification.php">Modification</a></li>
        <li><a href="affichage.php">Affichage</a></li>
    </ul>

    <table>
        <tr>
            <td>
                <?php
                    $sql= ('SELECT * FROM equipe')  
                ?>
            </td>
        </tr>
    </table>

    <?php
        $insert = $bdd->prepare( 'UPDATE equipe 
        SET joueur Meneur, Arriere, Aillier, Aillier_Fort, Pivot = Meneur, Arriere, Aillier, Aillier_Fort, Pivot
        WHERE id= $user' ); 
        
    ?>