<?php 
$case_number = 8;

include_once 'connection.php';
include_once 'imports/fiche.php';
include_once 'imports/bib.php';
include_once 'imports/case.php';
include_once 'imports/site.php';

$fiche = new Fiche;
$fiches = $fiche->fetch_all($case_number);

$bib = new Bib;
$bibs = $bib->fetch_all($case_number);

$site = new Site;
$sites = $site->fetch_all($case_number);

$case = new Contenu;
$cases = $case->fetch_all($case_number);

?>
<?php include 'modal-default.php'; ?>