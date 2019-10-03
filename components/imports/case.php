<?php

class Contenu{
    public function fetch_all() {
        global $pdo;
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare("SELECT * FROM cases");
        $query->execute();

        return $query->fetchAll();
    }
}

?>