<?php 
session_start();
include_once '../components/connection.php';

?>
<?php
if (isset($_SESSION['logged_in'])) {
    if (isset($_POST['book'])) {

        $book = $_POST['book'];
        $author = $_POST['author'];
        $editor = $_POST['editor'];
        $year = $_POST['year'];
        $size = $_POST['pages'];
        $link = $_POST['link'];
        $case = $_POST['case'];

        if (empty($book) or empty($author)){
            $error = "Tous les champs sont requis !";
        } else {
            $pdo->query('SET NAMES utf8');
            $query = $pdo->prepare('INSERT INTO bibliographies (bib_book, bib_author, bib_editor, bib_year, bib_size, bib_link, bib_case) VALUES (?, ?, ?, ?, ?, ?, ?)');
            $query->bindValue(1, $book);
            $query->bindValue(2, $author);
            $query->bindValue(3, $editor);
            $query->bindValue(4, $year);
            $query->bindValue(5, $size);
            $query->bindValue(6, $link);
            $query->bindValue(7, $case);
            $query->execute();

            header('Location: success.php');
        }
    }
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
        </head>
        <body>

        <?php include 'header.php'; ?>

        <div id="loginPageContainer">

            <?php if (isset($error)) { ?>
                <p style="color:#aa0000;"><?php echo $error; ?></p>
            <?php } ?>
            
            <div class="container" id="contentContainer">
            <h2>Ajouter une oeuvre :</h2>
                <div class="form-group column col-md-10 ">
                    <form action="addBiblio.php" method="post" autocomplete="on" id="editForm">

                        <label for="case">Case n°</label>
                            <select class="form-input w8" name="case">
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

                        <label for="author" class="w100">Auteur(s)</label>
                        <input type="text" class="form-input" name="author" >

                        <label for="book">Nom de l'ouvrage</label>
                        <input type="text" class="form-input" name="book" >

                        <label for="editor">Éditeur</label>
                        <input type="text" class="form-input" name="editor">

                        <label for="year">Année d'édition</label>
                        <input type="text" class="form-input w33" name="year" maxlength="4">

                        <label for="pages">Nombre de pages</label>
                        <input type="text" class="form-input w33" name="pages" maxlength="4">

                        <label for="link">Lien externe <i>(format www.monsite.com)</i></label>
                        <input type="text" class="form-input" name="link">

                    
                        <input class="btn btn-primary input-group-btn" type="submit" value="Ajouter" id="sendBtn"/>
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