<?php 
session_start();
include_once '../components/connection.php';
include_once '../components/imports/case3.php';

$case = new Contenu3;
$cases = $case->fetch_all();
?>
<?php include 'caseEditor.php'; ?>