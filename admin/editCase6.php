<?php 
session_start();
include_once '../components/connection.php';
include_once '../components/imports/case6.php';

$case = new Contenu6;
$cases = $case->fetch_all();
?>
<?php include 'caseEditor.php'; ?>