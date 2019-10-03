<?php 
session_start();
include_once '../components/connection.php';
include_once '../components/imports/case8.php';

$case = new Contenu8;
$cases = $case->fetch_all();
?>
<?php include 'caseEditor.php'; ?>