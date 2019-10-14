
<?php
session_start();
include_once '../components/connection.php';
include_once '../components/imports/case.php';

$case = new Contenu;
$cases = $case->fetch_all($case_number);


if (isset($_SESSION['logged_in'])) {
    if (isset($_POST['content'])) {
        $content = $_POST['content'];
        $title = $_POST['title'];
        if (empty($content) or empty($title)){
            $error = "Tous les champs sont requis !";
        } else {
            $pdo->query('SET NAMES utf8');
            $query1 = $pdo->prepare("UPDATE cases SET case_content = '$content' WHERE case_number = '$case_number' ");
            $query1->bindValue(1, $content);
            $query2 = $pdo->prepare("UPDATE cases SET case_title = '$title'  WHERE case_number = '$case_number' ");
            $query2->bindValue(1, $title);
            $query1->execute();
            $query2->execute();
            header('Location: modif.php');
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
            <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

            <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
            <script src="../js/jquery-3.4.1.min.js"></script>
        </head>
        <body>

        <?php include 'header.php'; ?>

        <div id="loginPageContainer">

            <?php if (isset($error)) { ?>
                <p style="color:#aa0000;"><?php echo $error; ?></p>
            <?php } ?>
            
            <div class="container" id="contentContainer">
            <h2>Modifier le contenu de la case n°<?php echo "$case_number" ?> </h2>
                <div class="form-group column col-md-10 ">
                    <form action="editCase<?php echo "$case_number" ?>.php" method="post"  autocomplete="off" id="editForm">
                    <?php foreach ($cases as $case) { ?>
                        <label for="title">Titre de la case</label>
                        <input type="text" class="form-input" name="title" value="<?php echo $case['case_title']; ?>">
                        <label for="content">Contenu de la case</label>
                        <div class="form-input" id="editor">
                            <?php echo $case['case_content']; ?>
                        </div>
                        <textarea class="form-input" name="content" style="display:none" id="hiddenArea" value=""></textarea>
                    <?php } ?>
                        <input class="btn btn-primary input-group-btn" type="submit" value="Modifier" id="sendBtn"/>
                        <a href="index.php" class="return">🡐 Retour</a>
                    </form>
                </div>
            </div>

        </div>
        <script>
            var toolbarOptions = [
                [{ 'header': '2' }],
                [ 'link' ],
                ['bold', 'italic', 'underline'], 
                [{ 'color': [] }, { 'background': [] }],        
                [ 'video' ],
            ];
            var quill = new Quill('#editor', {
                modules: {
                toolbar: toolbarOptions
            },
                theme: 'snow'
            });
            //gestion du changement de texte
            quill.on('text-change', function(delta, oldDelta, source) {
                var value = ($("#editor").html())
                $("#hiddenArea").val(value)
                console.log(value)
            });

        </script>
    <body>

<?php 

} else {
    header('Location : index.php');
}


?>