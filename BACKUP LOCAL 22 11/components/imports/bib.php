<?php

class Bib{
    public function fetch_all($case_number) {
        global $pdo;
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare("SELECT * FROM bibliographies WHERE bib_case = ".$case_number.";");
        $query->execute();

        return $query->fetchAll();
    }
}

?>