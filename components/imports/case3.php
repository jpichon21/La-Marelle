<?php

class Contenu3{
    public function fetch_all() {
        global $pdo;
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare("SELECT * FROM cases WHERE case_number = 3");
        $query->execute();

        return $query->fetchAll();
    }
}

?>