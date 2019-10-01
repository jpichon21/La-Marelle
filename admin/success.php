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

        <header class="navbar">
        <section class="navbar-section">
            <a href="index.php" class="btn btn-link">Accueil</a>
            <a href="../index.php" class="btn btn-link">Retour au site</a>
        </section>
        <section class="navbar-center">
            <!-- centered logo or brand -->
        </section>
        <section class="navbar-section">
        <a href="logout.php">Déconnexion</a>
        
        </section>
        </header>

        <div id="loginPageContainer">
            
        <div class="container" id="contentContainer">
            <h2>L'élément a été ajouté avec succès !</h2>
            <a href="index.php" class="return">🡐 Retour</a>
        </div>
    </body>

    <?php

} else {
    header('Location: index.php');
}

?>