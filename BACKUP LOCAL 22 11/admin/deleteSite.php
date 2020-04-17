<?php 
session_start();
include_once '../components/connection.php';
include_once '../components/imports/allSite.php';
$site = new allSite;

if (isset($_SESSION['logged_in'])) {

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare('DELETE from sites WHERE site_id = ?');
        $query->bindValue(1, $id);
        $query->execute();

        $success = "Le site a été supprimé avec succès !";

    }
    //display delete page
    $sites = $site->fetch_all()

    ?>
        <html>
        <head>
            <title>La Marelle Voix | Interface Gestion</title>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link rel="icon" href="../img/favicon.png" />
            <link rel="stylesheet" href="../css/spectre.min.css"/>
            <link rel="stylesheet" href="../css/spectre-exp.min.css"/>
            <link rel="stylesheet" href="../css/spectre-icons.min.css"/>
            <link rel="stylesheet" href="../css/main.css"/>
            <script src="../js/jquery-3.4.1.min.js"></script>
        </head>
        <script>
        </script>
        <body>

        <?php include 'header.php'; ?>

        <div id="loginPageContainer">
            
            <div class="container" id="contentContainer">
            <h2>Sélectionnez un site à supprimer :</h2>

            <?php if (isset($success)) { ?>
                <p style="color:green;" class="admin-msg"><?php echo $success; ?></p>
            <?php } ?>

                <div class="form-group column col-md-10 ">
                    <form action="deleteSite.php" method="get" class="form-group">
                        <select  class="form-select" name="id">
                        <option value="">Sélectionnez un site ressource pour le supprimer </option>
                            <?php foreach ($sites as $site) { ?>
                                <option value="<?php echo $site['site_id']; ?>">
                                    <?php echo $site['site_name'] ?> - case n°<?php echo $site['site_case'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    <input class="btn btn-primary input-group-btn" type="submit" value="Supprimer"/>
                    <a href="index.php" class="return">🡐 Retour</a>
                    </form>
                </div>
            </div>



        </div>
    <body>

    <?php

} else {
    header('Location: index.php');
}

?>