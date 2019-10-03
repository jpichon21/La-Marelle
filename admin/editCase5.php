<?php 
session_start();
include_once '../components/connection.php';
include_once '../components/imports/case5.php';

$case = new Contenu5;
$cases = $case->fetch_all();
?>
<?php include 'caseEditor.php'; ?>