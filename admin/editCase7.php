<?php 
session_start();
include_once '../components/connection.php';
include_once '../components/imports/case7.php';

$case = new Contenu7;
$cases = $case->fetch_all();
?>
<?php include 'caseEditor.php'; ?>