<?php

class Contenu8{
    public function fetch_all() {
        global $pdo;
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare("SELECT * FROM cases WHERE case_number = 8");
        $query->execute();

        return $query->fetchAll();
    }
}

?>