<?php 
session_start();
include_once '../components/connection.php';
include_once '../components/imports/case2.php';

$case = new Contenu2;
$cases = $case->fetch_all();
?>
<?php include 'caseEditor.php'; ?>