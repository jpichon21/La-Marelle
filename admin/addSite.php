<?php 
session_start();
include_once '../components/connection.php';

?>
<?php
if (isset($_SESSION['logged_in'])) {
    if (isset($_POST['url'])) {

        $name = $_POST['name'];
        $url = $_POST['url'];
        $case = $_POST['case'];

        if (empty($name) or empty($url)){
            $error = "Tous les champs sont requis !";
        } else {
            $query = $pdo->prepare('INSERT INTO sites (site_name, site_url, site_case) VALUES (?, ?, ?)');
            $query->bindValue(1, $name);
            $query->bindValue(2, $url);
            $query->bindValue(3, $case);
            $query->execute();

            header('Location: success.php');
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
            <h2>Ajouter un site ressource</h2>
                <div class="form-group column col-md-10 ">
                    <form action="addSite.php" method="post" autocomplete="on" id="editForm">

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

                        <label for="name">Nom du site</label>
                        <input type="text" class="form-input" name="name" >

                        <label for="url">Lien du site</label>
                        <input type="text" class="form-input" name="url" >
                    
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