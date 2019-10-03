<?php 
session_start();
include_once '../components/connection.php';
include_once '../components/imports/case4.php';

$case = new Contenu4;
$cases = $case->fetch_all();
?>
<?php include 'caseEditor.php'; ?>