<?php 
session_start();
include_once '../components/connection.php';
include_once '../components/imports/allFiche.php';
$case_number = 0;
$fiche = new allFiche;

if (isset($_SESSION['logged_in'])) {

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $target = $_GET['path'];
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare('DELETE from pdfdocs WHERE pdf_id = ?');
        $query->bindValue(1, $id);
        $query->execute();

        unlink($target);

        $success = "La fiche a été supprimée avec succès !";

    }
    //display delete page
    $fiches = $fiche->fetch_all()

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
            <h2>Sélectionnez une fiche à supprimer :</h2>

            <?php if (isset($success)) { ?>
                <p style="color:green;" class="admin-msg"><?php echo $success; ?></p>
            <?php } ?>

                <div class="form-group column col-md-10 ">
                    <form action="deletePDF.php" method="get" class="form-group">
                        <select  class="form-select" name="id">
                        <option value="">Sélectionnez une fiche pour la supprimer </option>
                            <?php foreach ($fiches as $fiche) { ?>
                                <option value="<?php echo $fiche['pdf_id']; ?>">
                                    <?php echo $fiche['pdf_content'] ?> - case n°<?php echo $fiche['pdf_case'] ?>
                                </option>
                                <input name="path" type="hidden" value="<?php echo $fiche['pdf_path']; ?>">
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