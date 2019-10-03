<?php 
session_start();
include_once '../components/connection.php';
include_once '../components/imports/case1.php';

$case = new Contenu1;
$cases = $case->fetch_all();
?>
<?php include 'caseEditor.php'; ?>