<?php 
session_start();
include_once '../components/connection.php';
include_once '../components/imports/allBib.php';
$bib = new allBib;

if (isset($_SESSION['logged_in'])) {

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare('DELETE from bibliographies WHERE bib_id = ?');
        $query->bindValue(1, $id);
        $query->execute();

        $success = "L'oeuvre a été supprimée avec succès !";

    }
    //display delete page
    $bibs = $bib->fetch_all()

    ?>
        <html>
        <head>
            <title>La Marelle Voix | Interface Gestion</title>
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
            <h2>Sélectionnez une oeuvre à supprimer :</h2>

            <?php if (isset($success)) { ?>
                <p style="color:green;"><?php echo $success; ?></p>
            <?php } ?>

                <div class="form-group column col-md-10 ">
                    <form action="deleteBiblio.php" method="get" class="form-group">
                        <select  class="form-select" name="id">
                        <option value="">Sélectionnez une oeuvre pour la supprimer </option>
                            <?php foreach ($bibs as $bib) { ?>
                                <option value="<?php echo $bib['bib_id']; ?>">
                                    <?php echo $bib['bib_book'] ?> - case n°<?php echo $bib['bib_case'] ?>
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