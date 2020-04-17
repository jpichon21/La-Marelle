<?php

class allFiche{
    public function fetch_all() {
        global $pdo;
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare("SELECT * FROM pdfdocs ORDER BY pdf_case");
        $query->execute();

        return $query->fetchAll();
    }
}

?>