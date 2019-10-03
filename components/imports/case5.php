<?php

class Contenu5{
    public function fetch_all() {
        global $pdo;
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare("SELECT * FROM cases WHERE case_number = 5");
        $query->execute();

        return $query->fetchAll();
    }
}

?>