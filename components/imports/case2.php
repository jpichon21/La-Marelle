<?php

class Contenu2{
    public function fetch_all() {
        global $pdo;
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare("SELECT * FROM cases WHERE case_number = 2");
        $query->execute();

        return $query->fetchAll();
    }
}

?>