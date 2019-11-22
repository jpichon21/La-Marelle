<?php

class Fiche{
    public function fetch_all($case_number) {
        global $pdo;
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare("SELECT * FROM pdfdocs WHERE pdf_case = ".$case_number.";");
        $query->execute();

        return $query->fetchAll();
    }
}

?>