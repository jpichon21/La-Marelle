<?php 
session_start();
include_once '../components/connection.php';

if (isset($_SESSION['logged_in'])) {

    ?>
        <html>
        <head>
            <title>La Marelle Voix | Interface Gestion</title>
            <link rel="stylesheet" href="../css/spectre.min.css"/>
            <link rel="stylesheet" href="../css/spectre-exp.min.css"/>
            <link rel="stylesheet" href="../css/spectre-icons.min.css"/>
            <link rel="stylesheet" href="../css/main.css"/>
        </head>
        <body>

        <?php include 'header.php'; ?>

        <div id="loginPageContainer">
            
        <div class="container" id="contentContainer">
            <h2>L'élément a été modifié avec succès !</h2>
            <a href="index.php" class="return">🡐 Retour</a>
        </div>
    </body>

    <?php

} else {
    header('Location: index.php');
}

?>