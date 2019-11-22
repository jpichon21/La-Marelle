<?php

class Contenu{
    public function fetch_all($case_number) {
        global $pdo;
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare("SELECT * FROM cases WHERE case_number = ".$case_number.";");
        $query->execute();

        return $query->fetchAll();
    }
}

?>