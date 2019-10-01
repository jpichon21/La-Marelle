<?php 
session_start();
include_once '../components/connection.php';

if (isset($_SESSION['logged_in'])) {
    if (isset($_POST['upload'])) {
        //chemin de sauvegarde
        $target = "../docs/pdf".basename($_FILES['pdf']['name']);

        $pdf= $_FILES['pdf']['name'];
        $case = $_POST['case'];

        if (empty($case) or empty($pdf)){
            $error = "Tous les champs sont requis !";
        } else {
            $query = $pdo->prepare('INSERT INTO pdfdocs (pdf_content, pdf_case) VALUES (?, ?)');
            $query->bindValue(1, $pdf);
            $query->bindValue(2, $case);
            $query->execute();

            if (move_uploaded_file($_FILES['pdf']['tmp_name'], $target)) {
                header('Location: success.php');
            }
        }
    }
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

            <?php if (isset($error)) { ?>
                <p style="color:#aa0000;"><?php echo $error; ?></p>
            <?php } ?>
            
            <div class="container" id="contentContainer">
            <h2>Ajouter une Fiche Pédagogique</h2>
                <div class="form-group column col-md-10 ">
                    <form action="addPDF.php" method="post"  enctype="multipart/form-data">
                        <input type="hidden" name="size" value="1000000">

                        <label for="pdf">Importer un document PDF</label>
                        <input class="form-input" type="file" name="pdf"/>

                        <label for="case">Case n°</label>
                        <select class="form-input" name="case">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>

                        <input class="btn btn-primary input-group-btn" type="submit" name="upload" value="Ajouter"/>
                        <a href="index.php" class="return">🡐 Retour</a>
                    </form>
                </div>
            </div>



        </div>
    <body>


<?php

} else {
    header('Location : index.php');
}



?>